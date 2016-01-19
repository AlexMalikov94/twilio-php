<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Api\V2010\Account\Sms;

use Twilio\ListResource;
use Twilio\Values;
use Twilio\Version;

class ShortCodeList extends ListResource {
    /**
     * Construct the ShortCodeList
     * 
     * @param Version $version Version that contains the resource
     * @param string $accountSid A 34 character string that uniquely identifies
     *                           this resource.
     * @return ShortCodeList 
     */
    public function __construct(Version $version, $accountSid) {
        parent::__construct($version);
        
        // Path Solution
        $this->solution = array(
            'accountSid' => $accountSid,
        );
        
        $this->uri = '/Accounts/' . $accountSid . '/SMS/ShortCodes.json';
    }

    /**
     * Constructs a ShortCodeContext
     * 
     * @param string $sid Fetch by unique short-code Sid
     * @return ShortCodeContext 
     */
    public function getContext($sid) {
        return new ShortCodeContext(
            $this->version,
            $this->solution['accountSid'],
            $sid
        );
    }

    /**
     * Provide a friendly representation
     * 
     * @return string Machine friendly representation
     */
    public function __toString() {
        return '[Twilio.Api.V2010.ShortCodeList]';
    }
}