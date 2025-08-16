<div>
    <h2>New Contact Message</h2>
    <p><strong>Name:</strong> {{ $contact->name }}</p>
    <p><strong>Email:</strong> {{ $contact->email }}</p>
    @if($contact->website)
        <p><strong>Website:</strong> {{ $contact->website }}</p>
    @endif
    <p><strong>Message:</strong></p>
    <p>{{ $contact->message }}</p>
</div>
