<div class="stripe d-none">
    <form action="{{route('addsaldo.stripe')}}" method="POST">
        {{ csrf_field() }}
        <input type="hidden" name="saldo" :value="Saldo">
        
    </form>
</div>