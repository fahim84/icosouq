<?php $this->load->view('header',$this->data); ?>


    <div class="row innerpage" id="tag-page">
        <div class="col-xs-12">
            <h1 class="title">Bitcoin News</h1>
        </div>

        <iframe src="https://cryptocurrencynews.com/category/basic-materials/daily-news/bitcoin-news/feed/" width="100%" height="400"></iframe>
        <div class="col-sm-12">
            <?php foreach($rows->result() as $row)
            {
            $image_url = $row->image == '' ? base_url().'uploads/articles/placeholder.png' : base_url().'uploads/articles/'.$row->image;
            $image = base_url()."thumb.php?src=".$image_url."&w=356&h=356";

            ?>

            <div class="row result">
                <figure class="col-sm-4">
                    <div class="image">
                        <a href="<?php echo base_url(); ?>welcome/newsdetail?id=<?php echo $row->article_id; ?>" >
                                <img src="<?php echo $image; ?>" alt="<?php echo $row->article; ?>">
                                <p class="sponsored badge badge-default" style="display: block;">News</p> 
                             
                        </a>
                    </div>
                </figure>
                <figure class="col-sm-8">
                    <h2 class="header">
                        <a href="<?php echo base_url(); ?>welcome/newsdetail?id=<?php echo $row->article_id; ?>"> <?php echo $row->article; ?> </a>
                    </h2>
                    <div class="info"> 
                        <span class="date"> <?php echo date("j M Y",strtotime($row->post_date)); ?> </span>
                        <!--<span class="author">
                            <a href="https://cointelegraph.com/authors/william_suberg"> William Suberg </a> 
                        </span>-->
                    </div>
                    <p class="text"> 
                        <a href="<?php echo base_url(); ?>welcome/newsdetail?id=<?php echo $row->article_id; ?>"> <?php echo character_limiter($row->description,200); ?> </a>
                    </p>
                    <!--<div>
                        <div class="stats"> 
                            <i class="fa fa-eye"></i>&nbsp;<span>8847</span> 
                            <span>&nbsp;&nbsp;|&nbsp;&nbsp;</span> 
                            <i class="fa fa-comments"></i>&nbsp;<span>3</span> 
                        </div> 
                    </div>-->
                </figure>
            </div>
            <?php } ?>

            <?php echo $pagination_links; ?>
        </div> 
    </div>


    <div class="row">
        <div class="col-xs-12">
        </div>
        <?php //echo $pagination_links; ?>
    </div>


<?php $this->load->view('footer',$this->data); ?>

