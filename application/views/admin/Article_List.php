<?php include('admin_header.php'); ?>
  <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header" style="text-align: center;">Aticle Lists</h1>
                </div>
                <!-- /.col-lg-12 -->
                <table class="table table-bordered table-responsive">
                    <thead>
                        <th>Sl No</th>
                        <th>Title</th>
                        <th>Tag</th>
                        <th colspan="3">Action</th>
                    </thead>
                    <tbody>
                        <?php
                         if(count($articles)):
                           $count=$this->uri->segment(3,0);
                       foreach ($articles as $article):
                       
                        ?>
                        <tr>
                          
                            <td><?=++$count ?></td>
                            <td><?=$article->title ?></td>
                            <td><?=$article->tag ?></td>
                            <td>
                                <?php
                                if($article->status==0)
                                {
                                 echo  anchor("admin/publish/{$article->id}","Publish",['class'=>'btn btn-success']);  
                                }
                                else
                                {
                                  echo '<button class="btn btn-info">published</button>'; 
                                }

                                ?>
                            </td>
                            <td>
                               <?= anchor("admin/edit_article/{$article->id}","Edit",['class'=>'btn btn-primary']); ?>
                             </td>
                             <td>    
                                <?= anchor("admin/delete_article/{$article->id}","Delete",['class'=>'btn btn-danger']); ?>
                            </td>
                        </tr>
                        <?php
                         endforeach;
                          else:
                        ?>
                        <tr>
                            <td colspan="4">No Results found!!</td>
                        </tr>
                        <?php
                         endif;
                        ?>
                    </tbody>
                </table>

                                <h3 style="float: left;"><?=$this->pagination->create_links(); ?></h3>
            </div>
            <!-- /.row -->
           
        </div>
        <!-- /#page-wrapper -->

<?php include('admin_footer.php'); ?>