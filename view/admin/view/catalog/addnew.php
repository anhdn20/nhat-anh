
      <div class="card mt-3" id="addpro">
        <div class="card-header info">
          QUẢN LÝ LOẠI HÀNG
        </div>
        <div class="card-body">
        <?php
            if(isset($_POST['them']) && ($_POST['them'])!=""){

            
        ?>

          <form action="index.php?ctrl=catalog&page=addnew" method="post" enctype="multipart/form-data">
        
            <div class="form-group">
                <label for="">Mã danh mục</label>
                <input type="text" readonly name="id" class="form-control" placeholder="Mã loại tự phát sinh">
              </div>
              <div class="form-group">
                <label for="">Tên danh mục</label>
                <input type="text" name="nameCata" class="form-control" placeholder="Tên loại" >

              </div>

              <div class="form-group">
                  <button type="submit" class="btn btn-primary" name="them" value="them">Lưu</button>
                  <a href="index.php?ctrl=catalog&page=index" class="btn btn-danger">Danh sách</a>
              </div>
          </form>
          <?php
            }else{
          ?>
          <form action="index.php?ctrl=catalog&page=addnew" method="post" enctype="multipart/form-data">
        
        <div class="form-group">
            <label for="">Mã danh mục</label>
            <input type="text" readonly name="id" class="form-control" placeholder="Mã loại tự phát sinh">
          </div>
          <div class="form-group">
            <label for="">Tên danh mục</label>
            <input type="text" name="nameCata" class="form-control" placeholder="Tên loại" >

          </div>

          <div class="form-group">
              <button type="submit" class="btn btn-primary" name="them" value="them">Lưu</button>
              <a href="index.php?ctrl=catalog&page=index" class="btn btn-danger">Danh sách</a>
          </div>
      </form>
           <?php
            }
          ?>
        </div>
      </div>
