<x-layout>
<div class="container">
  <h1>People</h1>
  <div class="card-deck">
    @foreach($people as $person)
        <div class="card">
            <div class="card-header">
                <span>{{ $person->first_name }} {{ $person->last_name }}</span>
            </div>
            <div class="card-body">
                <p>Email: {{ $person->email_address }}</p>
                <p>Phone: {{ $person->phone_number }}</p>
                <p>Profile picture url: {{ $person->profile_picture_url }}</p>
                <div>Companies worked for:
                    <span>
                    @foreach($person->companies->pluck('name') as $company)
                        @if($loop->remaining != 0)
                            {{ $company }},
                        @else
                            {{ $company }}
                        @endif
                    @endforeach
                    </span>
                </div>
            </div>
        </div>
    @endforeach
  </div>
  <a href="/people/create" class="btn btn-primary btn-block"> Add Employee</a>
</div>
</x-layout>