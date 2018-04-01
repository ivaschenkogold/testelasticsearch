<form id="elasticScout" action="/SearchQuery" method="get">
    <div class="mysearchbar">
        <input name="search" placeholder="Search...">
    </div>
</form>

@if(!empty($accounts))
    @foreach($accounts as $account)
        <h1>{{ $account->name }} {{$account->user->name}}</h1>
    @endforeach
@endif