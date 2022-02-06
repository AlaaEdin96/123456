<div>
    <br>
  
       
    <div class=" ">
        <div class="container-fluid">
            
            <div class="col-sm-6">
                <div class="form-group  col-md-12 ">
                                    
                    <label class="control-label" for="name">From Date:</label>
                   <input type="date" wire:model="fromDate" class="form-control"   value="">

                   <label class="control-label" for="name"> To Date:</label>
                   <input type="date" wire:model="toDate" class="form-control"  value="">

<br>
@if ($fromDate != null || $toDate != null)
<label class="control-label" for="name"> From Date:{{$fromDate}}</label>
<label class="control-label" for="name"> To Date: {{$toDate}}</label>
@endif
                   
                   
      </div>
            </div>
     
    
    <!-- /.modal -->
    
 
                                                                                                                                                                        </div>
        <div id="voyager-notifications"></div>
<div class="page-content">
<div class="alerts">
</div>
<div class="clearfix container-fluid row">
<div class="col-xs-12 col-sm-6 col-md-4"><div class="panel widget center bgimage">
 <div class="dimmer"></div>
<div class="panel-content">
<i class="voyager-group"></i>      
<h4>Totatl Cases</h4>
<h4>{{$items->count()}} </h4>
 </div>
</div>
</div><div class="col-xs-12 col-sm-6 col-md-4"><div class="panel widget center bgimage"
      >
<div class="dimmer"></div>
<div class="panel-content">
<i class="voyager-group"></i>  
<h4>Confairmed Cases</h4>

<h4>{{$items->where('is_c',1)->count()}}</h4>
 </div>
</div>
</div><div class="col-xs-12 col-sm-6 col-md-4"><div class="panel widget center bgimage"
      >
<div class="dimmer"></div>
<div class="panel-content">
<i class="voyager-group"></i> 
<h4>Unonfairmed Cases</h4>

<h4>{{$items->where('is_c',0)->count()}}</h4>
 </div>
</div>
</div>
</div>
<div class="col-xs-12 col-sm-6 col-md-4"><div class="panel widget center bgimage" 
    >
    <div class="dimmer"></div>
    <div class="panel-content">

        @if ($items->count()!=0)
        @php
        $is_c =   $items->where('is_c',1)->count(); 
         $totel=  $items->count()  ;
           $persintcomeing = $is_c /  $totel * 100;
          @endphp   
        @else
        @php
            $persintcomeing = 0
        @endphp    
        @endif
     
    <i class="voyager-group"></i> 
    <h4>Percentage Statstics</h4>
     
    <h4>Arrival Confairmed Cases</h4>
    <h4>{{intval($persintcomeing)}} %</h4>
    <h4>Uncomfrimed Cases</h4>
    <h4>
        @if ($persintcomeing == 0)
        {{0}} 
        @else
        {{intval(100 - $persintcomeing)}}  
        @endif
        %</h4>

    </div>
    </div>
</div>
</div></div>
