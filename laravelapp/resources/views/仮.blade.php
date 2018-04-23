<select class="custom-select col-3" data-width="70px">
  @php
     for ($i=1989; $i < 2000; $i++){
       if ($i=1989){
         echo '<option value="0">Year</option>';
       }else{
         echo '<option value='.$i.'>'.$i.'</option>';
       }
     }
  @endphp
</select>
<select class="custom-select col-3" data-width="80px">
  @foreach ($mounths as $mounth)
    @if ($mounth=0)
      <option value="0">Month</option>
    @else
      <option value="{{$mounth}}">{{$mounth}}</option>
    @endif
  @endforeach
</select>
<select class="custom-select col-3" data-width="60px">
  @php
     for ($i=0; $i < 32; $i++){
       if ($i=0){
         echo '<option value="0">Day</option>';
       }else{
         echo '<option value='.$i.'>'.$i.'</option>';
       }
     }
@endphp
</select>
