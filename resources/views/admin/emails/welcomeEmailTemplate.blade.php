
@component('mail::message')
    <p> Hello, {{$userRecord->fullname}} <br />  Thank you for registering with {{ Config('app.name'); }}</p>
    <p>We are honoured to have you. We hope to provide you an experience that is second to none in this industry.</p>

<p> We look forward to your input and support in ensuring that we create the best online experience 
    and enabling environment for the customers/Mechanics. </p>
<p> You can visit our website on www.mechanichubNigeria.com </p>

<p>Thanks</p>
<p>{{ Config('app.name'); }} Team. </p>
@endcomponent