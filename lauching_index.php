<?php
/*
Template Name: lauching
*/
get_header();
?>
<?php
    $dateLancement = get_post_meta(10, 'dateTime')[0];
    $date1 = new DateTime($dateLancement);
    $date2 = new DateTime("now");
    $interval = $date1->diff($date2);
    $diff = $interval->format(' %m month - %d days - %hh - %i min : %s s ');
?>
<main>
    <div class="container">
        <div class="row">
            <div class="col-12">

                <h1><?php echo get_post_meta($post->ID, 'title', true); ?></h1>
                <h2><?php echo $diff ?></h2>


                <div class="firstPara">
                    <p><?php echo get_post_meta($post->ID, 'firstPara', true); ?></p>
                    <p><?php echo get_post_meta($post->ID, 'thirdPara', true); ?></p>
                </div>

                <button type="button" class="btn btn" data-toggle="modal" data-target="#exampleModal">More</button>
                <button type="button" class="btn btn" data-toggle="modal" data-target="#exampleModal">About</button>

                <div class="secondPara">
                    <p><?php echo get_post_meta($post->ID, 'secondPara', true); ?></a></p>
                </div>

            </div>
        </div>
    </div>
</main>
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <form method="post" id="saved_email">
                   <div class="modal-body">
                       <div class="form-group">
                           <label for="newsletter_email" class="col-form-label">Subscribe address:</label>
                           <input type="email" id="newsletter_email" name="newsletter_email" class="form-control" placeholder="Your mail address">
                       </div>
                   </div>
                   <div class="modal-footer">
                       <button type="button" class="btn" data-dismiss="modal">Close</button>
                       <button type="submit" class="btn">Subscribe</button>
                   </div>
               </form>
                </div>
              </div>
            </div>
<?php
get_footer();
 ?>
