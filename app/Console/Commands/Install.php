<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class Install extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'web:install {--fresh : Drop all tables and start fresh}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Install the complete web application with database setup and seeders';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('🚀 Starting Web Application Installation...');
        $this->newLine();

        // Check if fresh option is provided
        $fresh = $this->option('fresh');

        if ($fresh) {
            $this->handleFreshInstall();
        } else {
            $this->handleRegularInstall();
        }

        $this->newLine();
        $this->info('✅ Installation completed successfully!');
        $this->info('🌐 Your web application is ready to use.');
        
        return 0;
    }

    /**
     * Handle fresh installation - drop all tables and recreate
     */
    private function handleFreshInstall()
    {
        $this->warn('⚠️  Fresh installation will drop ALL existing data!');
        
        if (!$this->confirm('Are you sure you want to continue?')) {
            $this->error('Installation cancelled.');
            return;
        }

        $this->info('🗑️  Dropping all tables...');
        $this->dropAllTables();

        $this->info('📋 Running fresh migrations...');
        Artisan::call('migrate:fresh', [], $this->getOutput());

        $this->info('🌱 Running all seeders...');
        $this->runSeeders();

        $this->info('🔗 Creating storage link...');
        Artisan::call('storage:link', [], $this->getOutput());
    }

    /**
     * Handle regular installation - just run migrations and seeders
     */
    private function handleRegularInstall()
    {
        $this->info('📋 Running migrations...');
        Artisan::call('migrate', [], $this->getOutput());

        $this->info('🌱 Running seeders...');
        $this->runSeeders();

        $this->info('🔗 Creating storage link...');
        Artisan::call('storage:link', [], $this->getOutput());
    }

    /**
     * Drop all tables from the database
     */
    private function dropAllTables()
    {
        try {
            // Get database connection
            $connection = DB::connection();
            $databaseName = $connection->getDatabaseName();

            // Disable foreign key checks
            DB::statement('SET FOREIGN_KEY_CHECKS=0;');

            // Get all table names
            $tables = DB::select('SHOW TABLES');
            $tableKey = 'Tables_in_' . $databaseName;

            // Drop each table
            foreach ($tables as $table) {
                $tableName = $table->$tableKey;
                $this->line("  Dropping table: {$tableName}");
                Schema::dropIfExists($tableName);
            }

            // Re-enable foreign key checks
            DB::statement('SET FOREIGN_KEY_CHECKS=1;');

            $this->info('  All tables dropped successfully.');
        } catch (\Exception $e) {
            $this->error('Error dropping tables: ' . $e->getMessage());
            throw $e;
        }
    }

    /**
     * Run all seeders in the correct order
     */
    private function runSeeders()
    {
        $seeders = [
            'DatabaseSeeder',
            'TechnologySeeder',
            'ProjectSeeder',
        ];

        foreach ($seeders as $seeder) {
            $this->line("  Running {$seeder}...");
            try {
                Artisan::call('db:seed', ['--class' => $seeder], $this->getOutput());
                $this->info("  ✅ {$seeder} completed successfully");
            } catch (\Exception $e) {
                $this->error("  ❌ Error running {$seeder}: " . $e->getMessage());
                // Continue with other seeders even if one fails
            }
        }
    }
}
