      <div class="card mt-3" id="addpro">
        <div class="card-header info">
          QUẢN LÝ LOẠI HÀNG
        </div>
        <div class="card-body">
          <?php
            if(isset($_POST['update']) && ($_POST['update']!="")){
              echo "<h1>bạn đã cập nhật thành công</h1>";
            
          ?>
          <form action="index.php?ctrl=catalog&page=edit" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">Mã danh mục</label>
                <input type="text" name="id" class="form-control" value="<?=$spedit['id']?>">
              </div>
              <div class="form-group">
                <label for="">Tên danh mục</label>
                <input type="text" name="nameCata" class="form-control" value="<?=$spedit['name']?>">
              </div>
              <div class="form-group">
                  <button type="submit" class="btn btn-primary" name="update" value="update">Cập nhật</button>
                  <a href="index.php?ctrl=catalog&page=index" class="btn btn-danger">Danh sách</a>
              </div>
          </form>
          <?php
            }else{
          ?>
        <form action="index.php?ctrl=catalog&page=edit" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">Mã danh mục</label>
                <input type="text" name="id" class="form-control" value="<?=$spedit['id']?>">
              </div>
              <div class="form-group">
                <label for="">Tên danh mục</label>
                <input type="text" name="nameCata" class="form-control" value="<?=$spedit['name']?>">
              </div>
              <div class="form-group">
                  <button type="submit" class="btn btn-primary" name="update" value="update">Cập nhật</button>
                  <a href="index.php?ctrl=catalog&page=index" class="btn btn-danger">Danh sách</a>
              </div>
          </form>
          <?php
            }
          ?>
        </div>
      </div>
