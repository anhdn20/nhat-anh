<form action="#" method="post">
      <div class="card mt-3" id="addpro">
        <div class="card-header">
          QUẢN LÝ DANH MỤC
        </div>
        <div class="card-body m-0 p-0">
          <table class="table table-striped table">
              <thead>
                <tr>
                  <th scope="col"></th>
                  <th scope="col">Mã loại</th>
                  <th scope="col">Tên loại</th>
                  <th scope="col"></th>

                </tr>
              </thead>
              

<script type="text/javascript">
			function selectAll(){
				var items=document.getElementsByName('acs');
				for(var i=0; i<items.length; i++){
					if(items[i].type=='checkbox')
						items[i].checked=true;
				}
			}
			function UnSelectAll(){
				var items=document.getElementsByName('acs');
				for(var i=0; i<items.length; i++){
					if(items[i].type=='checkbox')
						items[i].checked=false;
				}
			}			
		</script>
              <tbody>
                    <?php
                      foreach ($dm as $dm) {
                        $linkdel="index.php?ctrl=catalog&page=index&iddel=".$dm['id'];
                        $linkedit="index.php?ctrl=catalog&page=edit&idedit=".$dm['id'];
                        echo '<tr>
                                <th scope="row"><input type="checkbox" id="chonX" name="acs"></th>
                                <td>'.$dm['id'].'</td>
                                <td>'.$dm['name'].'</td>
                                <td>
                                  <a href="'.$linkdel.'" class="btn btn-secondary">Xoá</a>
                                  <a href="'.$linkedit.'" class="btn btn-outline-dark">Sửa</a>
                                </td>
                              </tr>';
                      }
                    ?>
              </tbody>
            </table>
          </div>
        <div class="card-footer">
        <a href="#" class="btn btn-info" onclick='selectAll()'>Chọn tất cả</a>
            <button class="btn btn-info" onclick='selectAll()'>Chọn tất cả(javascript)</button>
            <a href="#" class="btn btn-info" onclick='UnSelectAll()'>Bỏ chọn</a>
            <button type="submit" class="btn btn-info">Xoá danh mục đã chọn</button>
            <a href="index.php?ctrl=catalog&page=addnew" class="btn btn-info">Thêm mới</a>
        </div>
      </div>
</form>

