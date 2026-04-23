<x-app-layout>
    <style>
        .box {
  display: center;
  padding: .5em 0.8em;
  font-size: 1rem;  
  background: #e6e6e6;
  border-radius: .25em;
  user-select: none;
  transition: .15s;
  text-align: center;
}
</style>

<div class="box">    
    <h1>Your message has been sent successfully!</h1>
    <a href="{{ route('contacts.create') }}">Return</a>
</div>

</x-app-layout>