<?php $this->load->view('header',$this->data); ?>


    <div class="row" id="tag-page">
        <div class="col-xs-12">
            <h1 class="title">Bitcoin News</h1>
        </div>
        <!--<div class="col-xs-12" id="tag">
            <div class="row"> 
                <div class="col-md-4 image"> 
                    <img src="//cointelegraph.com/storage/uploads/view/1ce2f935afa26ebcb64bbe86a6599be0.png" alt="Bitcoin News - Cointelegraph"> 
                </div> 
                <div class="col-md-8 description"> 
                    <p></p>
                    <p>Bitcoin is an open-source, peer-to-peer, digital decentralized cryptocurrency. Powered by the Blockchain technology, its defining characteristic is its decentralization, i.e. the lack of central governing authority, such as a central bank or a ministry of finance. Bitcoin's issuance and circulation are ensured by regular users via a process known as "Bitcoin mining". Bitcoin can be sent anywhere, anytime, (almost) for free, and with little regard for national borders or government/bank-imposed restrictions.</p>
                    <p>Related links:</p>
                    <ul>
                        <li><a href="https://cointelegraph.com/tags/bitcoin-price">Bitcoin Price</a></li>
                        <li><a href="https://cointelegraph.com/bitcoin-price-index">Bitcoin Price Index</a></li>
                        <li><a href="https://cointelegraph.com/bitcoin-for-beginners/what-is-bitcoin">Bitcoin 101</a></li>
                    </ul>
                    <p></p> 
                </div> 
            </div> 
        </div>-->
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

