@extends('adminlte::page')
@section('content_header')
    <h1>User Tournament</h1>
@stop
@section('content')
    <div class="row">
        @if(isset($userGroupDetails))
            @foreach($userGroupDetails as $key => $userGroups)
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-info">
                    <div class="inner">
                        <h3>{{$userGroups->name}}</h3>
                        <p>{{$userGroups->user_name}}</p>
                        <p>Winner : {{$userGroups->winner_name}}</p>
                    </div>
                    </div>
                </div>
            @endforeach
        @endif
   </div>

   <div class="row">
    @if(isset($groupName))
            @foreach($groupName as $key => $group)
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <p>Round 2</p>
                    <div class="small-box bg-info">
                    <div class="inner">
                        <h3>{{$group}}</h3>
                    </div>
                    </div>
                </div>
            @endforeach
        @endif
  </div>
  
  <div class="row">
    @if(isset($winners))
        @foreach($winners as $winnerKey => $winner)
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <p>Round 2 Winners</p>
                <div class="small-box bg-info">
                <div class="inner">
                    <h3>Winner : {{$winner}}</h3>
                </div>
                </div>
            </div>
        @endforeach
    @endif
   </div>

   <div class="row">
    @if(isset($finalGroupName))
            @foreach($finalGroupName as $finalRoundeky => $finalGroup)
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <p>Round 3</p>
                    <div class="small-box bg-info">
                    <div class="inner">
                        <h3>{{$finalGroup}}</h3>
                    </div>
                    </div>
                </div>
            @endforeach
        @endif
  </div>

  <div class="row">
    @if(isset($finalWinners))
        @foreach($finalWinners as $finalWinnerKey => $finalWinner)
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <p>Round 3 Winners</p>
                <div class="small-box bg-info">
                <div class="inner">
                    <h3>Winner : {{$finalWinner}}</h3>
                </div>
                </div>
            </div>
        @endforeach
    @endif
   </div>
@stop
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript">
</script>    
