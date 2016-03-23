<div class="container-fruid">
    <div class="row">
        <div class="col-lg-12">
            <h2 class="page-header"><i class="fa fa-warning"></i> 待审核<small> 网友提交的网站</small></h2>
            <ol class="breadcrumb">
                <li ><i class="fa fa-dashboard"></i> 概况</li>
                <li class="active"><i class="fa fa-warning"></i> 待审核</li>
            </ol>
        </div>
    </div>
    <div class="row center-block">
        <div class="col-lg-12 col-md-12 waiting">
            <table class="table table-hover" style="table-layout:fixed">
                <caption><i class="fa fa-list"></i> 正在等待审核列表</caption>
                <thead>
                    <tr>
                        <th>时间</th>
                        <th>网站名称</th>
                        <th>URL</th>
                        <th>简介</th>
                        <th>联系邮箱</th>
                        <th>分类</th>
                    </tr>
                </thead>
                <tbody class="checking-site">

                </tbody>
            </table>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12"></div>
    </div>
    <div class="row center-block">
        <div class="col-lg-12 col-md-12 outofcheck">
            <table class="table table-hover" style="table-layout:fixed">
                <caption><i class="fa fa-ban"></i> 审核未通过列表</caption>
                <thead>
                    <tr>
                        <th>时间</th>
                        <th>网站名称</th>
                        <th>URL</th>
                        <th>简介</th>
                        <th>联系邮箱</th>
                        <th>分类</th>
                        <th>原因</th>
                    </tr>
                </thead>
                <tbody class="outofcheck-site">

                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="reasonModal" tabindex="-1" role="dialog" aria-labelledby="reasonModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="false">&times;</span></button>
                <h4 class="modal-title" id="reasonModalLabel">填写原因</h4>
            </div>
            <div class="modal-body">
                <div class="container-fruid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <textarea id="conclusion" name="conclusion" rows="9" style="width: 100%; border: 1px solid #ccc; border-radius: 4px; resize: none;"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" id="confirm">Save</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>