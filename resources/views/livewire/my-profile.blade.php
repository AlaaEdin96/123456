<div>
    <form class="form-edit-add"  >
  
        <div class="row">
    <div class="col-md-8">
        <div class="panel panel-bordered">
        
            
            <div class="panel-body">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Name" wire:model="user_name">
                </div>

                <div class="form-group">
                    <label for="email">E-mail</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="E-mail" wire:model="user_email">
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                                                        <br>
                        <small>Leave empty to keep the same</small>
                                                    <input type="" class="form-control" id="password" name="password"wire:model="user_password" autocomplete="new-password">
                </div>

                                                                     
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="panel panel panel-bordered panel-warning">
            
        </div>
    </div>
</div>

 
<div class="form-actions">
    <input type="button"   value="SAVE" wire:click.prevent="edit"   class="btn btn-primary pull-right">
</div>


</form>   
</div>
