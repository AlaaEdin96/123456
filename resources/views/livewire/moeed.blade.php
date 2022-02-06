<div class=" ">
    <div class="container-fluid">
<h1 class="page-title">
<i class="voyager-watch"></i> All Appointments 
</h1>
 


 
                                                                                                                                                    </div>
<div id="voyager-notifications"></div>
    <div class="page-content browse container-fluid">
<div class="alerts">
</div>
<div class="row">
<div class="col-md-12">
<div class="panel panel-bordered">
    <div class="panel-body">
                                <div class="table-responsive">
            <div id="dataTable_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer"><div class="row"><div class="col-sm-6">
                <div class="form-group  col-md-12 ">
                                    
                    <label class="control-label" for="name">تاريخ  البداء</label>
                   <input type="date" wire:model="DateStart" class="form-control" name="born" placeholder="تاريخ الميلاد" value="">

                   <label class="control-label" for="name">تاريخ الانهاء</label>
                   <input type="date" wire:model="DateEnd" class="form-control" name="born" placeholder="تاريخ الميلاد" value="">


                {{---<div class="form-actions">
                    <input type="button" name="btnReset" value="SIGN IN" wire:click.prevent="login" id="btnReset" class="signin-btn bg-primary">
                </div>---}}
                   
      </div>
            </div><div class="col-sm-6"><div id="dataTable_filter" class="dataTables_filter">
                <label>Search:<input type="search" class="form-control input-sm" wire:model="searchTerm"></label></div></div></div><div class="row"><div class="col-sm-12"><table id="dataTable" class="table table-hover dataTable no-footer" role="grid" aria-describedby="dataTable_info">
 
                    <thead>
                    <tr role="row">
  
                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="
                        المهاجر
                    : activate to sort column ascending" style="width: 34.7301px;">
                    File Number 
                    </th><th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="
                        الملف
                    : activate to sort column ascending" style="width: 57.1875px;">
                    Name
                    </th><th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="
                        الهاتف
                    : activate to sort column ascending" style="width: 72.571px;">
                    Phone Number 
                    </th><th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="
                        
                    : activate to sort column ascending" style="width: 28.5227px;">
                        Sex
                    </th><th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="
                        
                    : activate to sort column ascending" style="width: 28.5227px;">
                        Phone Number
                    </th><th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="
                       تاريخ الميلاد
                    : activate to sort column ascending" style="width: 116.136px;">
                    Appointment Date
                    </th>
                    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="
                        المدينة
                    : activate to sort column ascending" style="width: 28.5085px;">
                    Nationality
                    Section
                    </th>
                    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="
                    المدينة
                : activate to sort column ascending" style="width: 28.5085px;">
                Section
                </th> <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="
                المدينة
            : activate to sort column ascending" style="width: 28.5085px;">
            Confirmed
            </th><th class="actions text-right dt-not-orderable sorting_disabled" rowspan="1" colspan="1" aria-label="Actions" style="width: 184.574px;">Actions</th></tr>
</thead>
<tbody>
@foreach ( $moueds as $moued )
<tr role="row" class="odd">

<td><div>{{$moued->id_file}}</div></td> 
<td><div>{{$moued->name}}</div></td>

<td><div>{{$moued->pohne_number}}</div></td>
<td><div>{{$moued->sex}}</div></td>
<td><div>{{$moued->born}}</div></td>
<td><div>{{$moued->date}}</div></td>
<td><div>{{$moued->madenh->name}}</div></td>
<td><div>{{$moued->monadamh->name}}</div></td> 
@if ($moued->is_c != 0)
<td style="text-align:center;"> <span class="glyphicon glyphicon-ok" aria-hidden="true"></span></td>       

@endif            
@if ($moued->is_c == 0)
<td style="text-align: center"> </td>       

@endif                        
                         
                    <td class="no-sort no-click bread-actions">
 @php
     $url_vei='admin/appointment/'.$moued->id;
     $url_edit='admin/appointment/'.$moued->id.'/edit';
 @endphp

<a href="{{ url($url_vei)}}" title="View" class="btn btn-sm btn-warning pull-right view">
<i class="voyager-eye"></i> <span class="hidden-xs hidden-sm">View</span>
</a>
                                                                                    </td>
</tr>                    
                    @endforeach
                                                                  
  </tbody>
  
            </table>
        </div>
    </div>
    <div class="row">
        
        <div class="col-sm-6">
         </div>
        <div class="col-sm-6">
            <div class="dataTables_paginate paging_simple_numbers" id="dataTable_paginate">
    
                {{ $moueds->links() }}
            </div></div></div></div>
        </div>
       
                            </div>
</div>
</div>
</div>
</div>


<div class="modal modal-danger fade" tabindex="-1" id="delete_modal" role="dialog">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
    <h4 class="modal-title"><i class="voyager-trash"></i> Are you sure you want to delete this mohajer?</h4>
</div>

<div class="modal-footer">
    <form action="#" id="delete_form" method="POST">
        <input type="hidden" name="_method" value="DELETE">
        <input type="hidden" name="_token" value="9MYm0JP92D0rtBk2gHPSgBs7PvijIWTDjjJgmey1">
        <input type="submit" class="btn btn-danger pull-right delete-confirm" value="Yes, Delete it!">
    </form>
    <button type="button" class="btn btn-default pull-right" data-dismiss="modal">Cancel</button>
</div>
</div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
</div><!-- /.modal -->
</div>