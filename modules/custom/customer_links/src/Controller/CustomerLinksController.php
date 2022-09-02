<?php

 /**
  * @file
  * Containe\Drupal\customer_links\Controller\CustomerLinksController
  */

namespace Drupal\customer_links\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\Link;
use Drupal\Core\Url;

class CustomerLinksController extends ControllerBase{

    public function links() {

        //Go to block admin page/ admin/structure/blocks

        $url1 = Url::fromRoute('block.admin_display');
        $link1 = Link::fromTextAndUrl(t('Go to block admin page'), $url1);
        $list[] = $link1;

        // Go to link / admin / content
    }
}