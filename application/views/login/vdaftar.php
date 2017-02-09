<html>
<body>
        <?php $this->load->view('plugin/include_css') ?>

    <div class="ts-main-content">
    
            
                <div class="row">
                    <div class="col-md-12">
        
                        <div class="panel panel-default">
                            <div class="panel-heading">Form Pendaftaran</div>
                            <div class="panel-body">
                        
                                <?=form_open('Cadmin/insertDataAdmin', ['class'=>'form-horizontal']);?>
                                <div class="hr-dashed"></div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Nama </label>
                                    <div class="col-sm-10">
                                        <input type="text" id="nama" name="nama" class="form-control" placeholder="Nama ">
                                    </div>
                                </div>
                    
                                
                                <div class="hr-dashed"></div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Telp</label>
                                    <div class="col-sm-10">
                                        <input type="text" id="tlp" name="tlp" placeholder="Telepon" class="form-control">
                                    </div>
                                </div>

                                <div class="hr-dashed"></div>
                                    <div class="form-group">
                                        
                                        <label class="col-sm-2 control-label">Jenis Kelamin
                                            <br>
                                        </label>
                                        <div class="col-sm-10">
                                            <div class="radio radio-info radio-inline">
                                                <input type="radio" id="jk" value="Pria" name="jk" checked>
                                                <label for="jk"> Pria </label>
                                            </div>
                                            <div class="radio radio-inline">
                                                <input type="radio" id="jk" value="Wanita" name="jk">
                                                <label for="jk"> Wanita </label>
                                            </div>
                                        </div>                                          
                                    </div>

                                <div class="hr-dashed"></div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Alamat</label>
                                    <div class="col-sm-10">
                                        <input type="text" id="alamat" name="alamat" placeholder="Alamat" class="form-control">
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Username</label>
                                    <div class="col-sm-10">
                                        <input type="text" id="username" name="username" placeholder="Username" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Password</label>
                                    <div class="col-sm-10">
                                        <input type="password" id="password" name="password" placeholder="Passwrod" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Confirmation Password</label>
                                    <div class="col-sm-10">
                                        <input type="password" id="repassword" name="repassword" placeholder="Confirmation Passwrod" class="form-control">
                                    </div>
                                </div>
                                <div class="hr-dashed"></div>
                                <div class="form-group">
                                    <div class="col-sm-8 col-sm-offset-2">
                                        <button type="reset" class="btn btn-warning">Ulangi</button>
                                        <button class="btn btn-primary" type="submit">Simpan</button>
                                    </div>
                                </div>
                                <?=form_close();?>
                            </div>
            
                </div>
            </div>
        </div>
    </div>
        <?php $this->load->view('plugin/include_js') ?>

</body>
</html>