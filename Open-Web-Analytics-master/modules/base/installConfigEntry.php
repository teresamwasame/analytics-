<?php

//
// Open Web Analytics - An Open Source Web Analytics Framework
//
// Copyright 2006 Peter Adams. All rights reserved.
//
// Licensed under GPL v2.0 http://www.gnu.org/copyleft/gpl.html
//
// Unless required by applicable law or agreed to in writing, software
// distributed under the License is distributed on an "AS IS" BASIS,
// WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
// See the License for the specific language governing permissions and
// limitations under the License.
//
// $Id$
//

require_once(OWA_BASE_DIR.'/owa_view.php');

/**
 * Installer Configuration Entry View
 * 
 * @author      Peter Adams <peter@openwebanalytics.com>
 * @copyright   Copyright &copy; 2006 Peter Adams <peter@openwebanalytics.com>
 * @license     http://www.gnu.org/copyleft/gpl.html GPL v2.0
 * @category    owa
 * @package     owa
 * @version        $Revision$
 * @since        owa 1.0.0
 */

class owa_installConfigEntryView extends owa_view {

    function render($data) {

        //page title
        $this->t->set('page_title', 'Configuration File Generator');
        // load body template
        $this->body->set('config', $this->get('config'));
        $this->body->set_template('install_config_entry.php');
        // prepopulate the public url based on the current url.
        $public_url = owa_lib::get_current_url();
        $pos = strpos($public_url, 'install.php');
        $public_url = substr($public_url, 0, $pos);
        $this->body->set('public_url', $public_url);
        $this->setJs("owa", "base/dist/owa.reporting-combined-min.js");
    }
}

?>