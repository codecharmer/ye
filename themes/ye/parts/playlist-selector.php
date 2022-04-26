
<div class="container">        
        <form action="">
            <input type="hidden" id='hidden_token'>
            <div class="col-sm-6 form-group row mt-4 px-0">
                <label for="Genre" class="form-label col-sm-2">Genre:</label>
                <select name="" id="select_genre" class="form-control form-control-sm col-sm-10">
                    <option>Select...</option>                    
                </select>
            </div>
            <div class="col-sm-6 form-group row px-0">
                <label for="Genre" class="form-label col-sm-2">Playlists:</label>
                <select name="" id="select_playlist" class="form-control form-control-sm col-sm-10">
                    <option>Select...</option>                    
                </select>
            </div>                  
            <div class="col-sm-6 row form-group px-0">
                <button type="submit" id="btn_submit" class="btn btn-success col-sm-12">Search</button>
            </div>          
        </form>        
        <div class="row">
            <div class="col-sm-6 px-0">
                <div class="list-group song-list">
                    
                </div>                                             
            </div>
            <div class="offset-md-1 col-sm-4" id="song-detail">                
            </div>
        </div>   
    </div>