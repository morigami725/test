	
<script type="text/javascript">

$(window).scroll(function () {
	$('#facebox').css('position', 'fixed');
});

function closeFacebox(){
	$.facebox.close();
}

</script>
<style type="text/css">
#facebox .content{
	overflow-x: scroll;				/* 横スクロール */
	overflow-y: scroll;				/* 縦スクロール */
	width:	1200px !important;		/* faceboxの横幅 */
	height:	500px !important;		/* faceboxの縦幅 */
}
</style>

<div class="row mt">
  <div class="col-lg-12">
      <h4><i class="fa fa-angle-right"></i> @if(empty($id)) 新規登録 @else 編集 @endif</h4>
      <div class="form-panel">
          <div class=" form">
            <form class="cmxform form-horizontal style-form" id="commentForm" method="get" action="">
                <div class="form-group ">
                  <label for="cname" class="control-label col-lg-2">Name (required)</label>
                  <div class="col-lg-10">
                    <input class=" form-control" id="cname" name="name" minlength="2" type="text" required />
                  </div>
                </div>
                
                <div class="form-group ">
                  <label for="cname" class="control-label col-lg-2">Name (required)</label>
                  <div class="col-lg-10">
                  <select class="form-control area_select" name="area"><option value="26">京都府</option><option value="27" selected="selected">大阪府</option><option value="28">兵庫県</option></select>                  </div>
                </div>
                
                <div class="form-group ">
                  <label for="cname" class="control-label col-lg-2">Name (required)</label>
                  <div class="col-lg-10">
					<p class="form-control-static">email@example.com</p>
                </div>
                
                <div class="form-group">
                  <div class="col-lg-offset-2 col-lg-10">
                    <button class="btn btn-theme" type="submit">Save</button>
                    <button class="btn btn-theme04" type="button" onclick="closeFacebox()">Cancel</button>
                  </div>
                </div>
              </form>
           </div>
      </div><!-- /form-panel -->
    </div><!-- /col-lg-12 -->
</div><!-- /row -->


@if (0)

エリア：

最寄駅：

沿線

物件名：

物件名カナ：

都道府県

所在地

総階数：

総戸数：


竣工年月：

建物構造：

部屋番号：

占有面積：


<div class="matter" style="width: 500px;">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="widget wblue">
          <div class="widget-head">
            <div class="pull-left"> @if(empty($id)) 新規 @else 編集 @endif </div>
            <div class="clearfix"></div>
          </div>
          <div class="widget-content">
            <div class="padd">
              <div class="form profile">
                <form class="form-horizontal" action="" method="post" enctype="multipart/form-data" id="edit_id" name="edit_frm" onSubmit="return upload(this);">
                  <div class="clearfix"></div>
                  <div class="form-group" style="margin-top: 20px;">
                    <div class="col-lg-1 col-lg-offset-3 pull-left">
                      <input id="regist_btn" style="display:block; width: 100px; border: none !important; font-size:16px; font-weight:700;" class="btn btn-success" type="button" name="done" @if(empty($id)) value="登録する" @else value="登録する" @endif onclick="doneEdit()" />
                    </div>
                    <div class="col-lg-1 col-lg-offset-2 pull-left">
                      <input onclick="closeFacebox()"class="btn btn-danger" type="button" value="キャンセル" name="cancel" style="display:block; width: 90px; border: none !important; font-weight:700;">
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endif