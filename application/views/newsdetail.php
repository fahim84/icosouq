<?php $this->load->view('header',$this->data); ?>

<?php
$image_url = $row->image == '' ? base_url().'uploads/articles/placeholder.png' : base_url().'uploads/articles/'.$row->image;
//$image = base_url()."thumb.php?src=".$image_url."&w=340&h=200";
$image = $image_url;
?>

    <div class="row innerpage">
        <div class="col-xs-12 col-sm-8 post-area"> 
            <div class="post-header"> 
                <div class="date"> <?php echo date("j M Y",strtotime($row->post_date)); ?> </div>
                <!--<div class="staff">
                    <div class="user">
                        <div class="avatar" style="background-image: url('<?php /*echo base_url(); */?>assets/images/b417102729ed87940a5f433e724dce4f.png');">
                        </div> 
                    <div class="role">By</div>
                    <div class="name"> 
                        <a href="#" target="_self">William Suberg</a> 
                    </div>
                </div>
            </div> -->
            <h1 class="header"><?php echo $row->article; ?></h1>
            <!--<p class="post-description"><?php /*echo character_limiter($row->description,200); */?></p>-->
        </div> 
        <!--<div class="referral_widget">
            <div class="referral_stats total-views"> 
                <span class="total-qty"> 6823 </span> 
                <span class="views"> Total views </span>
            </div>
            <div class="referral_stats total-shares" style="margin-left: 10px;"> 
                <span class="total-qty">195</span> 
                <span class="views">Total shares</span>
            </div> 
        </div> -->
        <div class="post-content"> 
            <div class="image"> 
                <img src="<?php echo $image; ?>" alt="<?php echo $row->article; ?>" title="<?php echo $row->article; ?>">
                <!--<p class="sponsored badge badge-default" style="display: block;">News</p> -->
            </div> 
            <div class="post-full-text contents" itemprop="articleBody">
                <p><?php echo nl2br($row->description); ?></p>
            </div> 


        </div>
    </div>  
</div>
    <div class="row">
        <div class="col-xs-12">
        </div>
        <?php //echo $pagination_links; ?>
    </div>


<?php $this->load->view('footer',$this->data); ?>

