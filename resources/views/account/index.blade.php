<h2> Welcome , {{ \Auth::user()->email }}</h2>
<br>

@if(\Auth::user()->isAdmin==1) 
<a href="{{ route('admin') }}" >To Admin </a> <br>

@endif 

<a href="{{ route('logout') }}">Logout</a>