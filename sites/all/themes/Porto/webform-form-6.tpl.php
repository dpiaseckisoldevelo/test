<?php

/**
 * @file
 * Customize the display of a complete webform.
 *
 * This file may be renamed "webform-form-[nid].tpl.php" to target a specific
 * webform on your site. Or you can leave it "webform-form.tpl.php" to affect
 * all webforms on your site.
 *
 * Available variables:
 * - $form: The complete form array.
 * - $nid: The node ID of the Webform.
 *
 * The $form array contains two main pieces:
 * - $form['submitted']: The main content of the user-created form.
 * - $form['details']: Internal information stored by Webform.
 */
?>
<?php
/* Print out the main part of the form.
// Feel free to break this up and move the pieces within the array. */ ?>

<div class="row">

  <div class="span5 form-container" id="form-block">
    <h2>Get in <strong>Touch!</strong></h2>
    <?php print drupal_render($form['submitted']);?>
    <?php
    /* Always print out the entire $form. This renders the remaining pieces of the
    // form that haven't yet been rendered above. */
    print drupal_render_children($form);?>
  </div>

  <div class="span7">
    <p>If you find our sample projects interesting and you feel we are a&nbsp;proper partner for your organization, do not hesitate to contact us. We are open for cooperation with companies and organizations from all over the world. We will gladly share our experience and learn about the issues your company is working on.</p>

    <hr />


      <div class="span7" style="margin-left: 0;">
      <h2 style="width:100%">HR & Office</h2><br/>
      <div class="span3 salesman sales-link" style="margin-left: 0; margin-right:0;">
        <a class="thumbnail">
          <img src="/sites/default/files/aleksandra-popko.jpg"/>
        </a>
        <h4>Aleksandra Popko <br/><small>HR Specialist</small></h4>
      </div>
      <div class="span3 salesman sales-link" style="margin-left: 0;">
        <a class="thumbnail">
          <img src="/sites/default/files/alina-slawek.jpg" />
        </a>
        <h4>Alina Sławek-Półczyńska <br/><small>Office manager</small></h4>
      </div>
    </div>

    <div class="sales">
      <div class="span7" style="margin-left: 0;">
        <h2 style="width:100%">Sales Team</h2><br/>
        <div class="span3 salesman sales-link" style="margin-left: 0;">
          <a class="thumbnail">
            <img src="/sites/default/files/mateusz_czapko.jpg"/>
          </a>
          <h4>Mateusz Czapko <br/><small>Account Manager</small></h4>
          <i class=" icon-phone "></i><strong> Mobile:</strong> +48 796 605 547</p>
        </div>
      </div>
    
    </div>




    <h4>The <strong>Office</strong></h4>
    <ul class="unstyled">
      <li><strong>SolDevelo Sp. z o.o.</strong></li>
      <li><i class="icon-map-marker"></i> <strong>Address:</strong> Al. Zwycięstwa 96/98, 81-451 Gdynia, Poland</li>
      <li><i class="icon-phone"></i> <strong>Phone:</strong> +48 58 782 45 40</li>
      <li><i class="icon-phone"></i> <strong>Fax:</strong> +48 58 782 45 41</li>
    </ul>

    <hr />

    <h4>Business <strong>Hours</strong></h4>
    <ul class="unstyled">
      <li><i class="icon-time"></i> Monday - Friday 9am to 5pm</li>
      <li><i class="icon-time"></i> Saturday - Closed</li>
      <li><i class="icon-time"></i> Sunday - Closed</li>
    </ul>

    <hr />

    <h4>Legal <strong>Notices</strong></h4>
    <ul class="unstyled">
      <li><strong>SolDevelo Sp. z o.o.</strong></li>
      <li>Regional Court for the City of Gdansk</li>
      <li><strong>KRS:</strong> 0000332728</li>
      <li><strong>TAX ID:</strong> PL5862240331</li>
      <li><strong>REGON:</strong> 220828585</li>
      <li><strong>Share capital:</strong> 60,000.00 PLN</li>
    </ul>
  </div>
</div>
  
  
