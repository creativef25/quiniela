<form action="{{ route('logout') }}" method="post">
  @csrf
  <button type="submit" name="button"><i class="fa fa-power-off"></i> Logout</button>
</form>
