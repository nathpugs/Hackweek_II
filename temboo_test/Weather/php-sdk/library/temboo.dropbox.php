<?php

/**
 * Temboo PHP SDK Dropbox classes
 *
 * Execute Choreographies from the Temboo Dropbox bundle.
 *
 * PHP version 5
 *
 * LICENSE: Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 *
 * @category   Services
 * @package    Temboo
 * @subpackage Dropbox
 * @author     Temboo, Inc.
 * @copyright  2013 Temboo, Inc.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License 2.0
 * @link       http://www.temboo.com
 */
/**
 * Copies a file or folder to a different location in the user's Dropbox.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_Files_Copy extends Temboo_Choreography
{
    /**
     * Copies a file or folder to a different location in the user's Dropbox.
     *
     * @param Temboo_Session $session The session that owns this Copy Choreo.
     * @return Dropbox_Files_Copy New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Dropbox/Files/Copy/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this Copy Choreo.
     *
     * @param Dropbox_Files_Copy_Inputs|array $inputs (optional) Inputs as Dropbox_Files_Copy_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dropbox_Files_Copy_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Dropbox_Files_Copy_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this Copy Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dropbox_Files_Copy_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Dropbox_Files_Copy_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the Copy Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_Files_Copy_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the Copy Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dropbox_Files_Copy_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this Copy input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Dropbox_Files_Copy_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Dropbox_Files_Copy_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this Copy Choreo.
     *
     * @param string $value (required, string) The access token for a specific Dropbox user.
     * @return Dropbox_Files_Copy_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the AllowSharedFolder input for this Copy Choreo.
     *
     * @param bool $value (optional, boolean) If true, contents are copied into a shared folder, otherwise an error will be returned if the FromPath contains a shared folder. The default for this field is false.
     * @return Dropbox_Files_Copy_Inputs For method chaining.
     */
    public function setAllowSharedFolder($value)
    {
        return $this->set('AllowSharedFolder', $value);
    }

    /**
     * Set the value for the AutoRename input for this Copy Choreo.
     *
     * @param bool $value (optional, boolean) If there's a conflict, have the Dropbox server try to autorename the file to avoid the conflict. The default for this field is false.
     * @return Dropbox_Files_Copy_Inputs For method chaining.
     */
    public function setAutoRename($value)
    {
        return $this->set('AutoRename', $value);
    }

    /**
     * Set the value for the FromPath input for this Copy Choreo.
     *
     * @param string $value (required, string) Path in the user's Dropbox to be copied or moved.
     * @return Dropbox_Files_Copy_Inputs For method chaining.
     */
    public function setFromPath($value)
    {
        return $this->set('FromPath', $value);
    }

    /**
     * Set the value for the ToPath input for this Copy Choreo.
     *
     * @param string $value (required, string) Path in the user's Dropbox that is the destination.
     * @return Dropbox_Files_Copy_Inputs For method chaining.
     */
    public function setToPath($value)
    {
        return $this->set('ToPath', $value);
    }
}


/**
 * Execution object for the Copy Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_Files_Copy_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the Copy Choreo.
     *
     * @param Temboo_Session $session The session that owns this Copy execution.
     * @param Dropbox_Files_Copy $choreo The choreography object for this execution.
     * @param Dropbox_Files_Copy_Inputs|array $inputs (optional) Inputs as Dropbox_Files_Copy_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dropbox_Files_Copy_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Dropbox_Files_Copy $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this Copy execution.
     *
     * @return Dropbox_Files_Copy_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this Copy execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Dropbox_Files_Copy_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Dropbox_Files_Copy_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the Copy Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_Files_Copy_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the Copy Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Dropbox_Files_Copy_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this Copy execution.
     *
     * @return string (json) The response from Dropbox.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Gets a copy reference to a file or folder.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_Files_CopyReferenceGet extends Temboo_Choreography
{
    /**
     * Gets a copy reference to a file or folder.
     *
     * @param Temboo_Session $session The session that owns this CopyReferenceGet Choreo.
     * @return Dropbox_Files_CopyReferenceGet New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Dropbox/Files/CopyReferenceGet/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this CopyReferenceGet Choreo.
     *
     * @param Dropbox_Files_CopyReferenceGet_Inputs|array $inputs (optional) Inputs as Dropbox_Files_CopyReferenceGet_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dropbox_Files_CopyReferenceGet_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Dropbox_Files_CopyReferenceGet_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CopyReferenceGet Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dropbox_Files_CopyReferenceGet_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Dropbox_Files_CopyReferenceGet_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CopyReferenceGet Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_Files_CopyReferenceGet_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the CopyReferenceGet Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dropbox_Files_CopyReferenceGet_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CopyReferenceGet input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Dropbox_Files_CopyReferenceGet_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Dropbox_Files_CopyReferenceGet_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this CopyReferenceGet Choreo.
     *
     * @param string $value (required, string) The access token for a specific Dropbox user.
     * @return Dropbox_Files_CopyReferenceGet_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Path input for this CopyReferenceGet Choreo.
     *
     * @param string $value (required, string) The path to the file or folder you want to get a copy reference to.
     * @return Dropbox_Files_CopyReferenceGet_Inputs For method chaining.
     */
    public function setPath($value)
    {
        return $this->set('Path', $value);
    }
}


/**
 * Execution object for the CopyReferenceGet Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_Files_CopyReferenceGet_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CopyReferenceGet Choreo.
     *
     * @param Temboo_Session $session The session that owns this CopyReferenceGet execution.
     * @param Dropbox_Files_CopyReferenceGet $choreo The choreography object for this execution.
     * @param Dropbox_Files_CopyReferenceGet_Inputs|array $inputs (optional) Inputs as Dropbox_Files_CopyReferenceGet_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dropbox_Files_CopyReferenceGet_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Dropbox_Files_CopyReferenceGet $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CopyReferenceGet execution.
     *
     * @return Dropbox_Files_CopyReferenceGet_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this CopyReferenceGet execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Dropbox_Files_CopyReferenceGet_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Dropbox_Files_CopyReferenceGet_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the CopyReferenceGet Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_Files_CopyReferenceGet_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the CopyReferenceGet Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Dropbox_Files_CopyReferenceGet_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this CopyReferenceGet execution.
     *
     * @return string (json) The response from Dropbox.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Saves a copy reference returned by CopyReferenceGet to the user's Dropbox.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_Files_CopyReferenceSave extends Temboo_Choreography
{
    /**
     * Saves a copy reference returned by CopyReferenceGet to the user's Dropbox.
     *
     * @param Temboo_Session $session The session that owns this CopyReferenceSave Choreo.
     * @return Dropbox_Files_CopyReferenceSave New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Dropbox/Files/CopyReferenceSave/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this CopyReferenceSave Choreo.
     *
     * @param Dropbox_Files_CopyReferenceSave_Inputs|array $inputs (optional) Inputs as Dropbox_Files_CopyReferenceSave_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dropbox_Files_CopyReferenceSave_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Dropbox_Files_CopyReferenceSave_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CopyReferenceSave Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dropbox_Files_CopyReferenceSave_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Dropbox_Files_CopyReferenceSave_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CopyReferenceSave Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_Files_CopyReferenceSave_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the CopyReferenceSave Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dropbox_Files_CopyReferenceSave_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CopyReferenceSave input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Dropbox_Files_CopyReferenceSave_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Dropbox_Files_CopyReferenceSave_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this CopyReferenceSave Choreo.
     *
     * @param string $value (required, string) The access token for a specific Dropbox user.
     * @return Dropbox_Files_CopyReferenceSave_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the CopyReference input for this CopyReferenceSave Choreo.
     *
     * @param string $value (required, string) A copy reference returned by CopyReferenceGet.
     * @return Dropbox_Files_CopyReferenceSave_Inputs For method chaining.
     */
    public function setCopyReference($value)
    {
        return $this->set('CopyReference', $value);
    }

    /**
     * Set the value for the Path input for this CopyReferenceSave Choreo.
     *
     * @param string $value (required, string) Path in the user's Dropbox that is the destination.
     * @return Dropbox_Files_CopyReferenceSave_Inputs For method chaining.
     */
    public function setPath($value)
    {
        return $this->set('Path', $value);
    }
}


/**
 * Execution object for the CopyReferenceSave Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_Files_CopyReferenceSave_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CopyReferenceSave Choreo.
     *
     * @param Temboo_Session $session The session that owns this CopyReferenceSave execution.
     * @param Dropbox_Files_CopyReferenceSave $choreo The choreography object for this execution.
     * @param Dropbox_Files_CopyReferenceSave_Inputs|array $inputs (optional) Inputs as Dropbox_Files_CopyReferenceSave_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dropbox_Files_CopyReferenceSave_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Dropbox_Files_CopyReferenceSave $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CopyReferenceSave execution.
     *
     * @return Dropbox_Files_CopyReferenceSave_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this CopyReferenceSave execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Dropbox_Files_CopyReferenceSave_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Dropbox_Files_CopyReferenceSave_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the CopyReferenceSave Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_Files_CopyReferenceSave_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the CopyReferenceSave Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Dropbox_Files_CopyReferenceSave_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this CopyReferenceSave execution.
     *
     * @return string (json) The response from Dropbox.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Creates a folder at a given path.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_Files_CreateFolder extends Temboo_Choreography
{
    /**
     * Creates a folder at a given path.
     *
     * @param Temboo_Session $session The session that owns this CreateFolder Choreo.
     * @return Dropbox_Files_CreateFolder New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Dropbox/Files/CreateFolder/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this CreateFolder Choreo.
     *
     * @param Dropbox_Files_CreateFolder_Inputs|array $inputs (optional) Inputs as Dropbox_Files_CreateFolder_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dropbox_Files_CreateFolder_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Dropbox_Files_CreateFolder_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CreateFolder Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dropbox_Files_CreateFolder_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Dropbox_Files_CreateFolder_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CreateFolder Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_Files_CreateFolder_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the CreateFolder Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dropbox_Files_CreateFolder_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CreateFolder input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Dropbox_Files_CreateFolder_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Dropbox_Files_CreateFolder_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this CreateFolder Choreo.
     *
     * @param string $value (required, string) The access token for a specific Dropbox user.
     * @return Dropbox_Files_CreateFolder_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the AutoRename input for this CreateFolder Choreo.
     *
     * @param bool $value (optional, boolean) If there's a conflict, have the Dropbox server try to autorename the file to avoid the conflict. The default for this field is false.
     * @return Dropbox_Files_CreateFolder_Inputs For method chaining.
     */
    public function setAutoRename($value)
    {
        return $this->set('AutoRename', $value);
    }

    /**
     * Set the value for the Path input for this CreateFolder Choreo.
     *
     * @param string $value (required, string) Path in the user's Dropbox to create.
     * @return Dropbox_Files_CreateFolder_Inputs For method chaining.
     */
    public function setPath($value)
    {
        return $this->set('Path', $value);
    }
}


/**
 * Execution object for the CreateFolder Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_Files_CreateFolder_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CreateFolder Choreo.
     *
     * @param Temboo_Session $session The session that owns this CreateFolder execution.
     * @param Dropbox_Files_CreateFolder $choreo The choreography object for this execution.
     * @param Dropbox_Files_CreateFolder_Inputs|array $inputs (optional) Inputs as Dropbox_Files_CreateFolder_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dropbox_Files_CreateFolder_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Dropbox_Files_CreateFolder $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CreateFolder execution.
     *
     * @return Dropbox_Files_CreateFolder_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this CreateFolder execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Dropbox_Files_CreateFolder_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Dropbox_Files_CreateFolder_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the CreateFolder Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_Files_CreateFolder_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the CreateFolder Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Dropbox_Files_CreateFolder_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this CreateFolder execution.
     *
     * @return string (json) The response from Dropbox.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Deletes the file or folder at a given path.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_Files_Delete extends Temboo_Choreography
{
    /**
     * Deletes the file or folder at a given path.
     *
     * @param Temboo_Session $session The session that owns this Delete Choreo.
     * @return Dropbox_Files_Delete New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Dropbox/Files/Delete/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this Delete Choreo.
     *
     * @param Dropbox_Files_Delete_Inputs|array $inputs (optional) Inputs as Dropbox_Files_Delete_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dropbox_Files_Delete_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Dropbox_Files_Delete_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this Delete Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dropbox_Files_Delete_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Dropbox_Files_Delete_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the Delete Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_Files_Delete_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the Delete Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dropbox_Files_Delete_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this Delete input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Dropbox_Files_Delete_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Dropbox_Files_Delete_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this Delete Choreo.
     *
     * @param string $value (required, string) The access token for a specific Dropbox user.
     * @return Dropbox_Files_Delete_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Path input for this Delete Choreo.
     *
     * @param string $value (required, string) Path in the user's Dropbox to delete.
     * @return Dropbox_Files_Delete_Inputs For method chaining.
     */
    public function setPath($value)
    {
        return $this->set('Path', $value);
    }
}


/**
 * Execution object for the Delete Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_Files_Delete_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the Delete Choreo.
     *
     * @param Temboo_Session $session The session that owns this Delete execution.
     * @param Dropbox_Files_Delete $choreo The choreography object for this execution.
     * @param Dropbox_Files_Delete_Inputs|array $inputs (optional) Inputs as Dropbox_Files_Delete_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dropbox_Files_Delete_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Dropbox_Files_Delete $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this Delete execution.
     *
     * @return Dropbox_Files_Delete_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this Delete execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Dropbox_Files_Delete_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Dropbox_Files_Delete_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the Delete Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_Files_Delete_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the Delete Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Dropbox_Files_Delete_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this Delete execution.
     *
     * @return string (json) The response from Dropbox.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Downloads a file from a user's Dropbox.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_Files_Download extends Temboo_Choreography
{
    /**
     * Downloads a file from a user's Dropbox.
     *
     * @param Temboo_Session $session The session that owns this Download Choreo.
     * @return Dropbox_Files_Download New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Dropbox/Files/Download/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this Download Choreo.
     *
     * @param Dropbox_Files_Download_Inputs|array $inputs (optional) Inputs as Dropbox_Files_Download_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dropbox_Files_Download_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Dropbox_Files_Download_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this Download Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dropbox_Files_Download_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Dropbox_Files_Download_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the Download Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_Files_Download_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the Download Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dropbox_Files_Download_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this Download input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Dropbox_Files_Download_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Dropbox_Files_Download_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this Download Choreo.
     *
     * @param string $value (required, string) The access token for a specific Dropbox user.
     * @return Dropbox_Files_Download_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Encode input for this Download Choreo.
     *
     * @param bool $value (optional, boolean) Binary files must be returned as Base64-encoded data. If the file you are donwloading is plain text, you can set this to false to return the raw data. Defaults to true. 
     * @return Dropbox_Files_Download_Inputs For method chaining.
     */
    public function setEncode($value)
    {
        return $this->set('Encode', $value);
    }

    /**
     * Set the value for the Path input for this Download Choreo.
     *
     * @param string $value (required, string) The path of the file to download.
     * @return Dropbox_Files_Download_Inputs For method chaining.
     */
    public function setPath($value)
    {
        return $this->set('Path', $value);
    }
}


/**
 * Execution object for the Download Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_Files_Download_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the Download Choreo.
     *
     * @param Temboo_Session $session The session that owns this Download execution.
     * @param Dropbox_Files_Download $choreo The choreography object for this execution.
     * @param Dropbox_Files_Download_Inputs|array $inputs (optional) Inputs as Dropbox_Files_Download_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dropbox_Files_Download_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Dropbox_Files_Download $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this Download execution.
     *
     * @return Dropbox_Files_Download_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this Download execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Dropbox_Files_Download_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Dropbox_Files_Download_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the Download Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_Files_Download_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the Download Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Dropbox_Files_Download_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this Download execution.
     *
     * @return string The response from Dropbox.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Gets a cursor for the folder's state.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_Files_GetLatestCursor extends Temboo_Choreography
{
    /**
     * Gets a cursor for the folder's state.
     *
     * @param Temboo_Session $session The session that owns this GetLatestCursor Choreo.
     * @return Dropbox_Files_GetLatestCursor New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Dropbox/Files/GetLatestCursor/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetLatestCursor Choreo.
     *
     * @param Dropbox_Files_GetLatestCursor_Inputs|array $inputs (optional) Inputs as Dropbox_Files_GetLatestCursor_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dropbox_Files_GetLatestCursor_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Dropbox_Files_GetLatestCursor_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetLatestCursor Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dropbox_Files_GetLatestCursor_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Dropbox_Files_GetLatestCursor_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetLatestCursor Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_Files_GetLatestCursor_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetLatestCursor Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dropbox_Files_GetLatestCursor_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetLatestCursor input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Dropbox_Files_GetLatestCursor_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Dropbox_Files_GetLatestCursor_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this GetLatestCursor Choreo.
     *
     * @param string $value (required, string) The access token for a specific Dropbox user.
     * @return Dropbox_Files_GetLatestCursor_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the IncludeDeleted input for this GetLatestCursor Choreo.
     *
     * @param bool $value (optional, boolean) If true, the results will include entries for files and folders that used to exist but were deleted. The default for this field is false.
     * @return Dropbox_Files_GetLatestCursor_Inputs For method chaining.
     */
    public function setIncludeDeleted($value)
    {
        return $this->set('IncludeDeleted', $value);
    }

    /**
     * Set the value for the IncludeHasExplicitSharedMembers input for this GetLatestCursor Choreo.
     *
     * @param bool $value (optional, boolean) If true, the results will include a flag for each file indicating whether or not that file has any explicit members. The default for this field is false.
     * @return Dropbox_Files_GetLatestCursor_Inputs For method chaining.
     */
    public function setIncludeHasExplicitSharedMembers($value)
    {
        return $this->set('IncludeHasExplicitSharedMembers', $value);
    }

    /**
     * Set the value for the IncludeMediaInfo input for this GetLatestCursor Choreo.
     *
     * @param bool $value (optional, boolean) If true, FileMetadata.media_info is set for photo and video. The default for this field is false.
     * @return Dropbox_Files_GetLatestCursor_Inputs For method chaining.
     */
    public function setIncludeMediaInfo($value)
    {
        return $this->set('IncludeMediaInfo', $value);
    }

    /**
     * Set the value for the Path input for this GetLatestCursor Choreo.
     *
     * @param string $value (required, string) The path to the folder you want to see the contents of. This should be empty to list contents at the root level.
     * @return Dropbox_Files_GetLatestCursor_Inputs For method chaining.
     */
    public function setPath($value)
    {
        return $this->set('Path', $value);
    }

    /**
     * Set the value for the Recursive input for this GetLatestCursor Choreo.
     *
     * @param bool $value (optional, boolean) If true, the list folder operation will be applied recursively to all subfolders and the response will contain contents of all subfolders. The default for this field is false.
     * @return Dropbox_Files_GetLatestCursor_Inputs For method chaining.
     */
    public function setRecursive($value)
    {
        return $this->set('Recursive', $value);
    }
}


/**
 * Execution object for the GetLatestCursor Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_Files_GetLatestCursor_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetLatestCursor Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetLatestCursor execution.
     * @param Dropbox_Files_GetLatestCursor $choreo The choreography object for this execution.
     * @param Dropbox_Files_GetLatestCursor_Inputs|array $inputs (optional) Inputs as Dropbox_Files_GetLatestCursor_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dropbox_Files_GetLatestCursor_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Dropbox_Files_GetLatestCursor $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetLatestCursor execution.
     *
     * @return Dropbox_Files_GetLatestCursor_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this GetLatestCursor execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Dropbox_Files_GetLatestCursor_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Dropbox_Files_GetLatestCursor_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetLatestCursor Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_Files_GetLatestCursor_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetLatestCursor Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Dropbox_Files_GetLatestCursor_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Cursor" output from this GetLatestCursor execution.
     *
     * @return string (string) A cursor used to retrieve the next set of results with ListFolderContinue.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getCursor()
    {
        return $this->get('Cursor');
    }
}

/**
 * Returns the metadata for a file or folder.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_Files_GetMetadata extends Temboo_Choreography
{
    /**
     * Returns the metadata for a file or folder.
     *
     * @param Temboo_Session $session The session that owns this GetMetadata Choreo.
     * @return Dropbox_Files_GetMetadata New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Dropbox/Files/GetMetadata/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetMetadata Choreo.
     *
     * @param Dropbox_Files_GetMetadata_Inputs|array $inputs (optional) Inputs as Dropbox_Files_GetMetadata_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dropbox_Files_GetMetadata_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Dropbox_Files_GetMetadata_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetMetadata Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dropbox_Files_GetMetadata_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Dropbox_Files_GetMetadata_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetMetadata Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_Files_GetMetadata_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetMetadata Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dropbox_Files_GetMetadata_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetMetadata input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Dropbox_Files_GetMetadata_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Dropbox_Files_GetMetadata_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this GetMetadata Choreo.
     *
     * @param string $value (required, string) The access token for a specific Dropbox user.
     * @return Dropbox_Files_GetMetadata_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the IncludeDeleted input for this GetMetadata Choreo.
     *
     * @param bool $value (optional, boolean) If true, DeletedMetadata will be returned for deleted file or folder, otherwise LookupError.not_found will be returned. The default for this field is false.
     * @return Dropbox_Files_GetMetadata_Inputs For method chaining.
     */
    public function setIncludeDeleted($value)
    {
        return $this->set('IncludeDeleted', $value);
    }

    /**
     * Set the value for the IncludeHasExplicitSharedMembers input for this GetMetadata Choreo.
     *
     * @param bool $value (optional, boolean) If true, the results will include a flag for each file indicating whether or not that file has any explicit members. The default for this field is false.
     * @return Dropbox_Files_GetMetadata_Inputs For method chaining.
     */
    public function setIncludeHasExplicitSharedMembers($value)
    {
        return $this->set('IncludeHasExplicitSharedMembers', $value);
    }

    /**
     * Set the value for the IncludeMediaInfo input for this GetMetadata Choreo.
     *
     * @param bool $value (optional, boolean) If true, FileMetadata.media_info is set for photo and video. The default for this field is false.
     * @return Dropbox_Files_GetMetadata_Inputs For method chaining.
     */
    public function setIncludeMediaInfo($value)
    {
        return $this->set('IncludeMediaInfo', $value);
    }

    /**
     * Set the value for the Path input for this GetMetadata Choreo.
     *
     * @param string $value (required, string) The path of a file or folder on Dropbox.
     * @return Dropbox_Files_GetMetadata_Inputs For method chaining.
     */
    public function setPath($value)
    {
        return $this->set('Path', $value);
    }
}


/**
 * Execution object for the GetMetadata Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_Files_GetMetadata_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetMetadata Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetMetadata execution.
     * @param Dropbox_Files_GetMetadata $choreo The choreography object for this execution.
     * @param Dropbox_Files_GetMetadata_Inputs|array $inputs (optional) Inputs as Dropbox_Files_GetMetadata_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dropbox_Files_GetMetadata_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Dropbox_Files_GetMetadata $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetMetadata execution.
     *
     * @return Dropbox_Files_GetMetadata_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this GetMetadata execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Dropbox_Files_GetMetadata_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Dropbox_Files_GetMetadata_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetMetadata Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_Files_GetMetadata_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetMetadata Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Dropbox_Files_GetMetadata_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetMetadata execution.
     *
     * @return string (json) The response from Dropbox.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Gets a thumbnail for an image.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_Files_GetThumbnail extends Temboo_Choreography
{
    /**
     * Gets a thumbnail for an image.
     *
     * @param Temboo_Session $session The session that owns this GetThumbnail Choreo.
     * @return Dropbox_Files_GetThumbnail New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Dropbox/Files/GetThumbnail/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetThumbnail Choreo.
     *
     * @param Dropbox_Files_GetThumbnail_Inputs|array $inputs (optional) Inputs as Dropbox_Files_GetThumbnail_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dropbox_Files_GetThumbnail_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Dropbox_Files_GetThumbnail_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetThumbnail Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dropbox_Files_GetThumbnail_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Dropbox_Files_GetThumbnail_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetThumbnail Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_Files_GetThumbnail_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetThumbnail Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dropbox_Files_GetThumbnail_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetThumbnail input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Dropbox_Files_GetThumbnail_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Dropbox_Files_GetThumbnail_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this GetThumbnail Choreo.
     *
     * @param string $value (required, string) The access token for a specific Dropbox user.
     * @return Dropbox_Files_GetThumbnail_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Format input for this GetThumbnail Choreo.
     *
     * @param string $value (optional, string) The format for the thumbnail image, jpeg (default) or png.
     * @return Dropbox_Files_GetThumbnail_Inputs For method chaining.
     */
    public function setFormat($value)
    {
        return $this->set('Format', $value);
    }

    /**
     * Set the value for the Path input for this GetThumbnail Choreo.
     *
     * @param string $value (required, string) The path of the file to download.
     * @return Dropbox_Files_GetThumbnail_Inputs For method chaining.
     */
    public function setPath($value)
    {
        return $this->set('Path', $value);
    }

    /**
     * Set the value for the Size input for this GetThumbnail Choreo.
     *
     * @param string $value (optional, string) The size for the thumbnail image. The default for this union is w64h64.
     * @return Dropbox_Files_GetThumbnail_Inputs For method chaining.
     */
    public function setSize($value)
    {
        return $this->set('Size', $value);
    }
}


/**
 * Execution object for the GetThumbnail Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_Files_GetThumbnail_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetThumbnail Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetThumbnail execution.
     * @param Dropbox_Files_GetThumbnail $choreo The choreography object for this execution.
     * @param Dropbox_Files_GetThumbnail_Inputs|array $inputs (optional) Inputs as Dropbox_Files_GetThumbnail_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dropbox_Files_GetThumbnail_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Dropbox_Files_GetThumbnail $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetThumbnail execution.
     *
     * @return Dropbox_Files_GetThumbnail_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this GetThumbnail execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Dropbox_Files_GetThumbnail_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Dropbox_Files_GetThumbnail_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetThumbnail Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_Files_GetThumbnail_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetThumbnail Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Dropbox_Files_GetThumbnail_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetThumbnail execution.
     *
     * @return string The response from Dropbox.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Starts returning the contents of a folder.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_Files_ListFolder extends Temboo_Choreography
{
    /**
     * Starts returning the contents of a folder.
     *
     * @param Temboo_Session $session The session that owns this ListFolder Choreo.
     * @return Dropbox_Files_ListFolder New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Dropbox/Files/ListFolder/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ListFolder Choreo.
     *
     * @param Dropbox_Files_ListFolder_Inputs|array $inputs (optional) Inputs as Dropbox_Files_ListFolder_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dropbox_Files_ListFolder_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Dropbox_Files_ListFolder_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListFolder Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dropbox_Files_ListFolder_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Dropbox_Files_ListFolder_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListFolder Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_Files_ListFolder_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ListFolder Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dropbox_Files_ListFolder_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListFolder input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Dropbox_Files_ListFolder_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Dropbox_Files_ListFolder_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this ListFolder Choreo.
     *
     * @param string $value (required, string) The access token for a specific Dropbox user.
     * @return Dropbox_Files_ListFolder_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the IncludeDeleted input for this ListFolder Choreo.
     *
     * @param bool $value (optional, boolean) If true, the results will include entries for files and folders that used to exist but were deleted. The default for this field is false.
     * @return Dropbox_Files_ListFolder_Inputs For method chaining.
     */
    public function setIncludeDeleted($value)
    {
        return $this->set('IncludeDeleted', $value);
    }

    /**
     * Set the value for the IncludeHasExplicitSharedMembers input for this ListFolder Choreo.
     *
     * @param bool $value (optional, boolean) If true, the results will include a flag for each file indicating whether or not that file has any explicit members. The default for this field is false.
     * @return Dropbox_Files_ListFolder_Inputs For method chaining.
     */
    public function setIncludeHasExplicitSharedMembers($value)
    {
        return $this->set('IncludeHasExplicitSharedMembers', $value);
    }

    /**
     * Set the value for the IncludeMediaInfo input for this ListFolder Choreo.
     *
     * @param bool $value (optional, boolean) If true, FileMetadata.media_info is set for photo and video. The default for this field is false.
     * @return Dropbox_Files_ListFolder_Inputs For method chaining.
     */
    public function setIncludeMediaInfo($value)
    {
        return $this->set('IncludeMediaInfo', $value);
    }

    /**
     * Set the value for the Path input for this ListFolder Choreo.
     *
     * @param string $value (required, string) The path to the folder you want to see the contents of. This should be empty to list contents at the root level.
     * @return Dropbox_Files_ListFolder_Inputs For method chaining.
     */
    public function setPath($value)
    {
        return $this->set('Path', $value);
    }

    /**
     * Set the value for the Recursive input for this ListFolder Choreo.
     *
     * @param bool $value (optional, boolean) If true, the list folder operation will be applied recursively to all subfolders and the response will contain contents of all subfolders. The default for this field is false.
     * @return Dropbox_Files_ListFolder_Inputs For method chaining.
     */
    public function setRecursive($value)
    {
        return $this->set('Recursive', $value);
    }
}


/**
 * Execution object for the ListFolder Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_Files_ListFolder_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListFolder Choreo.
     *
     * @param Temboo_Session $session The session that owns this ListFolder execution.
     * @param Dropbox_Files_ListFolder $choreo The choreography object for this execution.
     * @param Dropbox_Files_ListFolder_Inputs|array $inputs (optional) Inputs as Dropbox_Files_ListFolder_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dropbox_Files_ListFolder_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Dropbox_Files_ListFolder $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListFolder execution.
     *
     * @return Dropbox_Files_ListFolder_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this ListFolder execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Dropbox_Files_ListFolder_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Dropbox_Files_ListFolder_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ListFolder Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_Files_ListFolder_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ListFolder Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Dropbox_Files_ListFolder_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Cursor" output from this ListFolder execution.
     *
     * @return string (string) A cursor used to retrieve the next set of results with ListFolderContinue.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getCursor()
    {
        return $this->get('Cursor');
    }
    /**
     * Retrieve the value for the "Response" output from this ListFolder execution.
     *
     * @return string (json) The response from Dropbox.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Once a cursor has been retrieved from ListFolder, use this to paginate through all files and retrieve updates to the folder.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_Files_ListFolderContinue extends Temboo_Choreography
{
    /**
     * Once a cursor has been retrieved from ListFolder, use this to paginate through all files and retrieve updates to the folder.
     *
     * @param Temboo_Session $session The session that owns this ListFolderContinue Choreo.
     * @return Dropbox_Files_ListFolderContinue New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Dropbox/Files/ListFolderContinue/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ListFolderContinue Choreo.
     *
     * @param Dropbox_Files_ListFolderContinue_Inputs|array $inputs (optional) Inputs as Dropbox_Files_ListFolderContinue_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dropbox_Files_ListFolderContinue_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Dropbox_Files_ListFolderContinue_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListFolderContinue Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dropbox_Files_ListFolderContinue_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Dropbox_Files_ListFolderContinue_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListFolderContinue Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_Files_ListFolderContinue_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ListFolderContinue Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dropbox_Files_ListFolderContinue_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListFolderContinue input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Dropbox_Files_ListFolderContinue_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Dropbox_Files_ListFolderContinue_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this ListFolderContinue Choreo.
     *
     * @param string $value (required, string) The access token for a specific Dropbox user.
     * @return Dropbox_Files_ListFolderContinue_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Cursor input for this ListFolderContinue Choreo.
     *
     * @param string $value (required, string) A cursor used to retrieve the next set of results.
     * @return Dropbox_Files_ListFolderContinue_Inputs For method chaining.
     */
    public function setCursor($value)
    {
        return $this->set('Cursor', $value);
    }
}


/**
 * Execution object for the ListFolderContinue Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_Files_ListFolderContinue_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListFolderContinue Choreo.
     *
     * @param Temboo_Session $session The session that owns this ListFolderContinue execution.
     * @param Dropbox_Files_ListFolderContinue $choreo The choreography object for this execution.
     * @param Dropbox_Files_ListFolderContinue_Inputs|array $inputs (optional) Inputs as Dropbox_Files_ListFolderContinue_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dropbox_Files_ListFolderContinue_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Dropbox_Files_ListFolderContinue $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListFolderContinue execution.
     *
     * @return Dropbox_Files_ListFolderContinue_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this ListFolderContinue execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Dropbox_Files_ListFolderContinue_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Dropbox_Files_ListFolderContinue_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ListFolderContinue Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_Files_ListFolderContinue_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ListFolderContinue Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Dropbox_Files_ListFolderContinue_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "LatestCursor" output from this ListFolderContinue execution.
     *
     * @return string (string) The latest cursor which can be used to retrieve the next set of results.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getLatestCursor()
    {
        return $this->get('LatestCursor');
    }
    /**
     * Retrieve the value for the "Response" output from this ListFolderContinue execution.
     *
     * @return string (json) The response from Dropbox.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns revisions of a file.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_Files_ListRevisions extends Temboo_Choreography
{
    /**
     * Returns revisions of a file.
     *
     * @param Temboo_Session $session The session that owns this ListRevisions Choreo.
     * @return Dropbox_Files_ListRevisions New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Dropbox/Files/ListRevisions/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ListRevisions Choreo.
     *
     * @param Dropbox_Files_ListRevisions_Inputs|array $inputs (optional) Inputs as Dropbox_Files_ListRevisions_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dropbox_Files_ListRevisions_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Dropbox_Files_ListRevisions_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListRevisions Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dropbox_Files_ListRevisions_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Dropbox_Files_ListRevisions_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListRevisions Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_Files_ListRevisions_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ListRevisions Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dropbox_Files_ListRevisions_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListRevisions input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Dropbox_Files_ListRevisions_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Dropbox_Files_ListRevisions_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this ListRevisions Choreo.
     *
     * @param string $value (required, string) The access token for a specific Dropbox user.
     * @return Dropbox_Files_ListRevisions_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Limit input for this ListRevisions Choreo.
     *
     * @param int $value (optional, integer) The number of revisions to return. The default for this field is 10.
     * @return Dropbox_Files_ListRevisions_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }

    /**
     * Set the value for the Path input for this ListRevisions Choreo.
     *
     * @param string $value (conditional, string) The path to the file you want to see the revisions of.
     * @return Dropbox_Files_ListRevisions_Inputs For method chaining.
     */
    public function setPath($value)
    {
        return $this->set('Path', $value);
    }
}


/**
 * Execution object for the ListRevisions Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_Files_ListRevisions_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListRevisions Choreo.
     *
     * @param Temboo_Session $session The session that owns this ListRevisions execution.
     * @param Dropbox_Files_ListRevisions $choreo The choreography object for this execution.
     * @param Dropbox_Files_ListRevisions_Inputs|array $inputs (optional) Inputs as Dropbox_Files_ListRevisions_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dropbox_Files_ListRevisions_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Dropbox_Files_ListRevisions $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListRevisions execution.
     *
     * @return Dropbox_Files_ListRevisions_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this ListRevisions execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Dropbox_Files_ListRevisions_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Dropbox_Files_ListRevisions_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ListRevisions Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_Files_ListRevisions_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ListRevisions Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Dropbox_Files_ListRevisions_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ListRevisions execution.
     *
     * @return string (json) The response from Dropbox.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Moves a file or folder to a different location in the user's Dropbox.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_Files_Move extends Temboo_Choreography
{
    /**
     * Moves a file or folder to a different location in the user's Dropbox.
     *
     * @param Temboo_Session $session The session that owns this Move Choreo.
     * @return Dropbox_Files_Move New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Dropbox/Files/Move/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this Move Choreo.
     *
     * @param Dropbox_Files_Move_Inputs|array $inputs (optional) Inputs as Dropbox_Files_Move_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dropbox_Files_Move_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Dropbox_Files_Move_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this Move Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dropbox_Files_Move_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Dropbox_Files_Move_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the Move Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_Files_Move_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the Move Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dropbox_Files_Move_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this Move input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Dropbox_Files_Move_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Dropbox_Files_Move_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this Move Choreo.
     *
     * @param string $value (required, string) The access token for a specific Dropbox user.
     * @return Dropbox_Files_Move_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the AllowSharedFolder input for this Move Choreo.
     *
     * @param bool $value (optional, boolean) If true, contents are copied into a shared folder, otherwise an error will be returned if the FromPath contains a shared folder. The default for this field is false.
     * @return Dropbox_Files_Move_Inputs For method chaining.
     */
    public function setAllowSharedFolder($value)
    {
        return $this->set('AllowSharedFolder', $value);
    }

    /**
     * Set the value for the AutoRename input for this Move Choreo.
     *
     * @param bool $value (optional, boolean) If there's a conflict, have the Dropbox server try to autorename the file to avoid the conflict. The default for this field is false.
     * @return Dropbox_Files_Move_Inputs For method chaining.
     */
    public function setAutoRename($value)
    {
        return $this->set('AutoRename', $value);
    }

    /**
     * Set the value for the FromPath input for this Move Choreo.
     *
     * @param string $value (required, string) Path in the user's Dropbox to be copied or moved.
     * @return Dropbox_Files_Move_Inputs For method chaining.
     */
    public function setFromPath($value)
    {
        return $this->set('FromPath', $value);
    }

    /**
     * Set the value for the ToPath input for this Move Choreo.
     *
     * @param string $value (required, string) Path in the user's Dropbox that is the destination.
     * @return Dropbox_Files_Move_Inputs For method chaining.
     */
    public function setToPath($value)
    {
        return $this->set('ToPath', $value);
    }
}


/**
 * Execution object for the Move Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_Files_Move_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the Move Choreo.
     *
     * @param Temboo_Session $session The session that owns this Move execution.
     * @param Dropbox_Files_Move $choreo The choreography object for this execution.
     * @param Dropbox_Files_Move_Inputs|array $inputs (optional) Inputs as Dropbox_Files_Move_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dropbox_Files_Move_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Dropbox_Files_Move $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this Move execution.
     *
     * @return Dropbox_Files_Move_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this Move execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Dropbox_Files_Move_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Dropbox_Files_Move_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the Move Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_Files_Move_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the Move Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Dropbox_Files_Move_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this Move execution.
     *
     * @return string (json) The response from Dropbox.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Restores a file to a specific revision.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_Files_Restore extends Temboo_Choreography
{
    /**
     * Restores a file to a specific revision.
     *
     * @param Temboo_Session $session The session that owns this Restore Choreo.
     * @return Dropbox_Files_Restore New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Dropbox/Files/Restore/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this Restore Choreo.
     *
     * @param Dropbox_Files_Restore_Inputs|array $inputs (optional) Inputs as Dropbox_Files_Restore_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dropbox_Files_Restore_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Dropbox_Files_Restore_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this Restore Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dropbox_Files_Restore_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Dropbox_Files_Restore_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the Restore Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_Files_Restore_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the Restore Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dropbox_Files_Restore_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this Restore input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Dropbox_Files_Restore_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Dropbox_Files_Restore_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this Restore Choreo.
     *
     * @param string $value (required, string) The access token for a specific Dropbox user.
     * @return Dropbox_Files_Restore_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Path input for this Restore Choreo.
     *
     * @param string $value (conditional, string) The path to the file you want to see the revisions of.
     * @return Dropbox_Files_Restore_Inputs For method chaining.
     */
    public function setPath($value)
    {
        return $this->set('Path', $value);
    }

    /**
     * Set the value for the Revision input for this Restore Choreo.
     *
     * @param string $value (required, string) The number of revisions to return. The default for this field is 10.
     * @return Dropbox_Files_Restore_Inputs For method chaining.
     */
    public function setRevision($value)
    {
        return $this->set('Revision', $value);
    }
}


/**
 * Execution object for the Restore Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_Files_Restore_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the Restore Choreo.
     *
     * @param Temboo_Session $session The session that owns this Restore execution.
     * @param Dropbox_Files_Restore $choreo The choreography object for this execution.
     * @param Dropbox_Files_Restore_Inputs|array $inputs (optional) Inputs as Dropbox_Files_Restore_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dropbox_Files_Restore_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Dropbox_Files_Restore $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this Restore execution.
     *
     * @return Dropbox_Files_Restore_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this Restore execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Dropbox_Files_Restore_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Dropbox_Files_Restore_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the Restore Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_Files_Restore_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the Restore Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Dropbox_Files_Restore_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this Restore execution.
     *
     * @return string (json) The response from Dropbox.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Searches for files and folders.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_Files_Search extends Temboo_Choreography
{
    /**
     * Searches for files and folders.
     *
     * @param Temboo_Session $session The session that owns this Search Choreo.
     * @return Dropbox_Files_Search New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Dropbox/Files/Search/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this Search Choreo.
     *
     * @param Dropbox_Files_Search_Inputs|array $inputs (optional) Inputs as Dropbox_Files_Search_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dropbox_Files_Search_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Dropbox_Files_Search_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this Search Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dropbox_Files_Search_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Dropbox_Files_Search_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the Search Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_Files_Search_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the Search Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dropbox_Files_Search_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this Search input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Dropbox_Files_Search_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Dropbox_Files_Search_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this Search Choreo.
     *
     * @param string $value (required, string) The access token for a specific Dropbox user.
     * @return Dropbox_Files_Search_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the MaxResults input for this Search Choreo.
     *
     * @param bool $value (optional, boolean) The maximum number of search results to return. The default for this field is 100.
     * @return Dropbox_Files_Search_Inputs For method chaining.
     */
    public function setMaxResults($value)
    {
        return $this->set('MaxResults', $value);
    }

    /**
     * Set the value for the Mode input for this Search Choreo.
     *
     * @param string $value (optional, string) The search mode (filename, filename_and_content, or deleted_filename). Note that searching file content is only available for Dropbox Business accounts. The default for this union is filename.
     * @return Dropbox_Files_Search_Inputs For method chaining.
     */
    public function setMode($value)
    {
        return $this->set('Mode', $value);
    }

    /**
     * Set the value for the Path input for this Search Choreo.
     *
     * @param string $value (conditional, string) Path in the user's Dropbox to search. This should be empty to search at the root level.
     * @return Dropbox_Files_Search_Inputs For method chaining.
     */
    public function setPath($value)
    {
        return $this->set('Path', $value);
    }

    /**
     * Set the value for the Query input for this Search Choreo.
     *
     * @param bool $value (optional, boolean) The string to search for. 
     * @return Dropbox_Files_Search_Inputs For method chaining.
     */
    public function setQuery($value)
    {
        return $this->set('Query', $value);
    }

    /**
     * Set the value for the Start input for this Search Choreo.
     *
     * @param int $value (optional, integer) The starting index within the search results (used for paging). The default for this field is 0.
     * @return Dropbox_Files_Search_Inputs For method chaining.
     */
    public function setStart($value)
    {
        return $this->set('Start', $value);
    }
}


/**
 * Execution object for the Search Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_Files_Search_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the Search Choreo.
     *
     * @param Temboo_Session $session The session that owns this Search execution.
     * @param Dropbox_Files_Search $choreo The choreography object for this execution.
     * @param Dropbox_Files_Search_Inputs|array $inputs (optional) Inputs as Dropbox_Files_Search_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dropbox_Files_Search_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Dropbox_Files_Search $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this Search execution.
     *
     * @return Dropbox_Files_Search_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this Search execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Dropbox_Files_Search_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Dropbox_Files_Search_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the Search Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_Files_Search_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the Search Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Dropbox_Files_Search_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this Search execution.
     *
     * @return string (json) The response from Dropbox.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Creates a new file with the contents provided in the request.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_Files_Upload extends Temboo_Choreography
{
    /**
     * Creates a new file with the contents provided in the request.
     *
     * @param Temboo_Session $session The session that owns this Upload Choreo.
     * @return Dropbox_Files_Upload New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Dropbox/Files/Upload/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this Upload Choreo.
     *
     * @param Dropbox_Files_Upload_Inputs|array $inputs (optional) Inputs as Dropbox_Files_Upload_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dropbox_Files_Upload_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Dropbox_Files_Upload_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this Upload Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dropbox_Files_Upload_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Dropbox_Files_Upload_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the Upload Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_Files_Upload_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the Upload Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dropbox_Files_Upload_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this Upload input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Dropbox_Files_Upload_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Dropbox_Files_Upload_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this Upload Choreo.
     *
     * @param string $value (required, string) The access token for a specific Dropbox user.
     * @return Dropbox_Files_Upload_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the AutoRename input for this Upload Choreo.
     *
     * @param bool $value (optional, boolean) If there's a conflict, as determined by mode, have the Dropbox server try to autorename the file to avoid conflict. The default for this field is false.
     * @return Dropbox_Files_Upload_Inputs For method chaining.
     */
    public function setAutoRename($value)
    {
        return $this->set('AutoRename', $value);
    }

    /**
     * Set the value for the ContentType input for this Upload Choreo.
     *
     * @param string $value (optional, string) The content type of the file being uploaded. Defaults to application/octet-stream.
     * @return Dropbox_Files_Upload_Inputs For method chaining.
     */
    public function setContentType($value)
    {
        return $this->set('ContentType', $value);
    }

    /**
     * Set the value for the FileContent input for this Upload Choreo.
     *
     * @param string $value (conditional, string) The Base64-encoded file content of the file you want to upload. Required unless uploading a file from a URL using the FileURL input. Encoding is not required when ContentType is set to "text/plain".
     * @return Dropbox_Files_Upload_Inputs For method chaining.
     */
    public function setFileContent($value)
    {
        return $this->set('FileContent', $value);
    }

    /**
     * Set the value for the FileURL input for this Upload Choreo.
     *
     * @param string $value (optional, string) The public URL for file you want to upload. This can be used as an alternative to uploading Base64 encoded data.
     * @return Dropbox_Files_Upload_Inputs For method chaining.
     */
    public function setFileURL($value)
    {
        return $this->set('FileURL', $value);
    }

    /**
     * Set the value for the Mode input for this Upload Choreo.
     *
     * @param string $value (optional, string) Selects what to do if the file already exists. Valid values are: add (default), overwrite, and update.
     * @return Dropbox_Files_Upload_Inputs For method chaining.
     */
    public function setMode($value)
    {
        return $this->set('Mode', $value);
    }

    /**
     * Set the value for the Mute input for this Upload Choreo.
     *
     * @param bool $value (optional, boolean) If true, this tells the clients that this modification shouldn't result in a user notification. The default for this field is false.
     * @return Dropbox_Files_Upload_Inputs For method chaining.
     */
    public function setMute($value)
    {
        return $this->set('Mute', $value);
    }

    /**
     * Set the value for the Path input for this Upload Choreo.
     *
     * @param string $value (required, string) Path in the user's Dropbox to save the file, including the filename.
     * @return Dropbox_Files_Upload_Inputs For method chaining.
     */
    public function setPath($value)
    {
        return $this->set('Path', $value);
    }

    /**
     * Set the value for the Revision input for this Upload Choreo.
     *
     * @param string $value (optional, string) The revision identifier. Used only when Mode is set to "update".
     * @return Dropbox_Files_Upload_Inputs For method chaining.
     */
    public function setRevision($value)
    {
        return $this->set('Revision', $value);
    }
}


/**
 * Execution object for the Upload Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_Files_Upload_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the Upload Choreo.
     *
     * @param Temboo_Session $session The session that owns this Upload execution.
     * @param Dropbox_Files_Upload $choreo The choreography object for this execution.
     * @param Dropbox_Files_Upload_Inputs|array $inputs (optional) Inputs as Dropbox_Files_Upload_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dropbox_Files_Upload_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Dropbox_Files_Upload $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this Upload execution.
     *
     * @return Dropbox_Files_Upload_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this Upload execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Dropbox_Files_Upload_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Dropbox_Files_Upload_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the Upload Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_Files_Upload_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the Upload Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Dropbox_Files_Upload_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this Upload execution.
     *
     * @return string (json) The response from Dropbox.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Appends more data to an upload session.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_Files_UploadSessionAppend extends Temboo_Choreography
{
    /**
     * Appends more data to an upload session.
     *
     * @param Temboo_Session $session The session that owns this UploadSessionAppend Choreo.
     * @return Dropbox_Files_UploadSessionAppend New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Dropbox/Files/UploadSessionAppend/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this UploadSessionAppend Choreo.
     *
     * @param Dropbox_Files_UploadSessionAppend_Inputs|array $inputs (optional) Inputs as Dropbox_Files_UploadSessionAppend_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dropbox_Files_UploadSessionAppend_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Dropbox_Files_UploadSessionAppend_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this UploadSessionAppend Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dropbox_Files_UploadSessionAppend_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Dropbox_Files_UploadSessionAppend_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the UploadSessionAppend Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_Files_UploadSessionAppend_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the UploadSessionAppend Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dropbox_Files_UploadSessionAppend_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this UploadSessionAppend input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Dropbox_Files_UploadSessionAppend_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Dropbox_Files_UploadSessionAppend_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this UploadSessionAppend Choreo.
     *
     * @param string $value (required, string) The access token for a specific Dropbox user.
     * @return Dropbox_Files_UploadSessionAppend_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Close input for this UploadSessionAppend Choreo.
     *
     * @param bool $value (optional, boolean) If true, the current session will be closed, at which point you won't be able to call UploadSessionAppend anymore with the current session. The default for this field is false.
     * @return Dropbox_Files_UploadSessionAppend_Inputs For method chaining.
     */
    public function setClose($value)
    {
        return $this->set('Close', $value);
    }

    /**
     * Set the value for the ContentType input for this UploadSessionAppend Choreo.
     *
     * @param string $value (optional, string) The content type of the file being uploaded. Defaults to application/octet-stream.
     * @return Dropbox_Files_UploadSessionAppend_Inputs For method chaining.
     */
    public function setContentType($value)
    {
        return $this->set('ContentType', $value);
    }

    /**
     * Set the value for the FileContent input for this UploadSessionAppend Choreo.
     *
     * @param string $value (conditional, string) The next file segment to upload. Binary files should be Base64-encoded. Encoding is not required when ContentType is set to "text/plain".
     * @return Dropbox_Files_UploadSessionAppend_Inputs For method chaining.
     */
    public function setFileContent($value)
    {
        return $this->set('FileContent', $value);
    }

    /**
     * Set the value for the Offset input for this UploadSessionAppend Choreo.
     *
     * @param int $value (required, integer) The amount of data that has been uploaded so far.
     * @return Dropbox_Files_UploadSessionAppend_Inputs For method chaining.
     */
    public function setOffset($value)
    {
        return $this->set('Offset', $value);
    }

    /**
     * Set the value for the SessionID input for this UploadSessionAppend Choreo.
     *
     * @param string $value (conditional, string) The upload session ID returned from UploadSessionStart.
     * @return Dropbox_Files_UploadSessionAppend_Inputs For method chaining.
     */
    public function setSessionID($value)
    {
        return $this->set('SessionID', $value);
    }
}


/**
 * Execution object for the UploadSessionAppend Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_Files_UploadSessionAppend_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the UploadSessionAppend Choreo.
     *
     * @param Temboo_Session $session The session that owns this UploadSessionAppend execution.
     * @param Dropbox_Files_UploadSessionAppend $choreo The choreography object for this execution.
     * @param Dropbox_Files_UploadSessionAppend_Inputs|array $inputs (optional) Inputs as Dropbox_Files_UploadSessionAppend_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dropbox_Files_UploadSessionAppend_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Dropbox_Files_UploadSessionAppend $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this UploadSessionAppend execution.
     *
     * @return Dropbox_Files_UploadSessionAppend_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this UploadSessionAppend execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Dropbox_Files_UploadSessionAppend_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Dropbox_Files_UploadSessionAppend_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the UploadSessionAppend Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_Files_UploadSessionAppend_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the UploadSessionAppend Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Dropbox_Files_UploadSessionAppend_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this UploadSessionAppend execution.
     *
     * @return string (json) The response from Dropbox.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Finishes an upload session and save the uploaded data to the given file path.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_Files_UploadSessionFinish extends Temboo_Choreography
{
    /**
     * Finishes an upload session and save the uploaded data to the given file path.
     *
     * @param Temboo_Session $session The session that owns this UploadSessionFinish Choreo.
     * @return Dropbox_Files_UploadSessionFinish New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Dropbox/Files/UploadSessionFinish/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this UploadSessionFinish Choreo.
     *
     * @param Dropbox_Files_UploadSessionFinish_Inputs|array $inputs (optional) Inputs as Dropbox_Files_UploadSessionFinish_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dropbox_Files_UploadSessionFinish_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Dropbox_Files_UploadSessionFinish_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this UploadSessionFinish Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dropbox_Files_UploadSessionFinish_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Dropbox_Files_UploadSessionFinish_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the UploadSessionFinish Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_Files_UploadSessionFinish_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the UploadSessionFinish Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dropbox_Files_UploadSessionFinish_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this UploadSessionFinish input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Dropbox_Files_UploadSessionFinish_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Dropbox_Files_UploadSessionFinish_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this UploadSessionFinish Choreo.
     *
     * @param string $value (required, string) The access token for a specific Dropbox user.
     * @return Dropbox_Files_UploadSessionFinish_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the AutoRename input for this UploadSessionFinish Choreo.
     *
     * @param bool $value (optional, boolean) If there's a conflict, as determined by mode, have the Dropbox server try to autorename the file to avoid conflict. The default for this field is false.
     * @return Dropbox_Files_UploadSessionFinish_Inputs For method chaining.
     */
    public function setAutoRename($value)
    {
        return $this->set('AutoRename', $value);
    }

    /**
     * Set the value for the ContentType input for this UploadSessionFinish Choreo.
     *
     * @param string $value (optional, string) The content type of the file being uploaded. Defaults to application/octet-stream.
     * @return Dropbox_Files_UploadSessionFinish_Inputs For method chaining.
     */
    public function setContentType($value)
    {
        return $this->set('ContentType', $value);
    }

    /**
     * Set the value for the FileContent input for this UploadSessionFinish Choreo.
     *
     * @param string $value (conditional, string) The remaining file content. Encoding is not required when ContentType is set to "text/plain". This can be left empty if the last file chunk was sent using UploadSessionAppend.
     * @return Dropbox_Files_UploadSessionFinish_Inputs For method chaining.
     */
    public function setFileContent($value)
    {
        return $this->set('FileContent', $value);
    }

    /**
     * Set the value for the Mode input for this UploadSessionFinish Choreo.
     *
     * @param string $value (optional, string) Selects what to do if the file already exists. Valid values are: add (default), overwrite, and update.
     * @return Dropbox_Files_UploadSessionFinish_Inputs For method chaining.
     */
    public function setMode($value)
    {
        return $this->set('Mode', $value);
    }

    /**
     * Set the value for the Mute input for this UploadSessionFinish Choreo.
     *
     * @param bool $value (optional, boolean) If true, this tells the clients that this modification shouldn't result in a user notification. The default for this field is false.
     * @return Dropbox_Files_UploadSessionFinish_Inputs For method chaining.
     */
    public function setMute($value)
    {
        return $this->set('Mute', $value);
    }

    /**
     * Set the value for the Offset input for this UploadSessionFinish Choreo.
     *
     * @param int $value (required, integer) The amount of data that has been uploaded so far.
     * @return Dropbox_Files_UploadSessionFinish_Inputs For method chaining.
     */
    public function setOffset($value)
    {
        return $this->set('Offset', $value);
    }

    /**
     * Set the value for the Path input for this UploadSessionFinish Choreo.
     *
     * @param string $value (required, string) Path in the user's Dropbox to save the file.
     * @return Dropbox_Files_UploadSessionFinish_Inputs For method chaining.
     */
    public function setPath($value)
    {
        return $this->set('Path', $value);
    }

    /**
     * Set the value for the Revision input for this UploadSessionFinish Choreo.
     *
     * @param string $value (optional, string) The revision identifier. Used only when Mode is set to "update".
     * @return Dropbox_Files_UploadSessionFinish_Inputs For method chaining.
     */
    public function setRevision($value)
    {
        return $this->set('Revision', $value);
    }

    /**
     * Set the value for the SessionID input for this UploadSessionFinish Choreo.
     *
     * @param string $value (required, string) The upload session ID returned from UploadSessionStart.
     * @return Dropbox_Files_UploadSessionFinish_Inputs For method chaining.
     */
    public function setSessionID($value)
    {
        return $this->set('SessionID', $value);
    }
}


/**
 * Execution object for the UploadSessionFinish Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_Files_UploadSessionFinish_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the UploadSessionFinish Choreo.
     *
     * @param Temboo_Session $session The session that owns this UploadSessionFinish execution.
     * @param Dropbox_Files_UploadSessionFinish $choreo The choreography object for this execution.
     * @param Dropbox_Files_UploadSessionFinish_Inputs|array $inputs (optional) Inputs as Dropbox_Files_UploadSessionFinish_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dropbox_Files_UploadSessionFinish_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Dropbox_Files_UploadSessionFinish $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this UploadSessionFinish execution.
     *
     * @return Dropbox_Files_UploadSessionFinish_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this UploadSessionFinish execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Dropbox_Files_UploadSessionFinish_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Dropbox_Files_UploadSessionFinish_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the UploadSessionFinish Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_Files_UploadSessionFinish_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the UploadSessionFinish Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Dropbox_Files_UploadSessionFinish_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this UploadSessionFinish execution.
     *
     * @return string (json) The response from Dropbox.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Allows you to upload a single file in one or more requests. This call starts a new upload session with the first chunk of data.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_Files_UploadSessionStart extends Temboo_Choreography
{
    /**
     * Allows you to upload a single file in one or more requests. This call starts a new upload session with the first chunk of data.
     *
     * @param Temboo_Session $session The session that owns this UploadSessionStart Choreo.
     * @return Dropbox_Files_UploadSessionStart New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Dropbox/Files/UploadSessionStart/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this UploadSessionStart Choreo.
     *
     * @param Dropbox_Files_UploadSessionStart_Inputs|array $inputs (optional) Inputs as Dropbox_Files_UploadSessionStart_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dropbox_Files_UploadSessionStart_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Dropbox_Files_UploadSessionStart_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this UploadSessionStart Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dropbox_Files_UploadSessionStart_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Dropbox_Files_UploadSessionStart_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the UploadSessionStart Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_Files_UploadSessionStart_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the UploadSessionStart Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dropbox_Files_UploadSessionStart_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this UploadSessionStart input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Dropbox_Files_UploadSessionStart_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Dropbox_Files_UploadSessionStart_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this UploadSessionStart Choreo.
     *
     * @param string $value (required, string) The access token for a specific Dropbox user.
     * @return Dropbox_Files_UploadSessionStart_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Close input for this UploadSessionStart Choreo.
     *
     * @param bool $value (optional, boolean) If true, the current session will be closed, at which point you won't be able to call UploadSessionAppend anymore with the current session. The default for this field is false.
     * @return Dropbox_Files_UploadSessionStart_Inputs For method chaining.
     */
    public function setClose($value)
    {
        return $this->set('Close', $value);
    }

    /**
     * Set the value for the ContentType input for this UploadSessionStart Choreo.
     *
     * @param string $value (optional, string) The content type of the file being uploaded. Defaults to application/octet-stream.
     * @return Dropbox_Files_UploadSessionStart_Inputs For method chaining.
     */
    public function setContentType($value)
    {
        return $this->set('ContentType', $value);
    }

    /**
     * Set the value for the FileContent input for this UploadSessionStart Choreo.
     *
     * @param string $value (conditional, string) The first file segment to upload. Binary files should be Base64-encoded. Encoding is not required when ContentType is set to "text/plain".
     * @return Dropbox_Files_UploadSessionStart_Inputs For method chaining.
     */
    public function setFileContent($value)
    {
        return $this->set('FileContent', $value);
    }
}


/**
 * Execution object for the UploadSessionStart Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_Files_UploadSessionStart_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the UploadSessionStart Choreo.
     *
     * @param Temboo_Session $session The session that owns this UploadSessionStart execution.
     * @param Dropbox_Files_UploadSessionStart $choreo The choreography object for this execution.
     * @param Dropbox_Files_UploadSessionStart_Inputs|array $inputs (optional) Inputs as Dropbox_Files_UploadSessionStart_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dropbox_Files_UploadSessionStart_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Dropbox_Files_UploadSessionStart $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this UploadSessionStart execution.
     *
     * @return Dropbox_Files_UploadSessionStart_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this UploadSessionStart execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Dropbox_Files_UploadSessionStart_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Dropbox_Files_UploadSessionStart_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the UploadSessionStart Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_Files_UploadSessionStart_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the UploadSessionStart Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Dropbox_Files_UploadSessionStart_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "SessionID" output from this UploadSessionStart execution.
     *
     * @return string (string) The upload session ID that can be used to append to the upload or finish the upload.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getSessionID()
    {
        return $this->get('SessionID');
    }
}

/**
 * Completes the OAuth process by retrieving a Dropbox access token, after they have visited the authorization URL returned by the InitializeOAuth choreo and clicked "allow."
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_OAuth_FinalizeOAuth extends Temboo_Choreography
{
    /**
     * Completes the OAuth process by retrieving a Dropbox access token, after they have visited the authorization URL returned by the InitializeOAuth choreo and clicked "allow."
     *
     * @param Temboo_Session $session The session that owns this FinalizeOAuth Choreo.
     * @return Dropbox_OAuth_FinalizeOAuth New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Dropbox/OAuth/FinalizeOAuth/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this FinalizeOAuth Choreo.
     *
     * @param Dropbox_OAuth_FinalizeOAuth_Inputs|array $inputs (optional) Inputs as Dropbox_OAuth_FinalizeOAuth_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dropbox_OAuth_FinalizeOAuth_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Dropbox_OAuth_FinalizeOAuth_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this FinalizeOAuth Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dropbox_OAuth_FinalizeOAuth_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Dropbox_OAuth_FinalizeOAuth_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the FinalizeOAuth Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_OAuth_FinalizeOAuth_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the FinalizeOAuth Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dropbox_OAuth_FinalizeOAuth_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this FinalizeOAuth input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Dropbox_OAuth_FinalizeOAuth_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Dropbox_OAuth_FinalizeOAuth_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AppKey input for this FinalizeOAuth Choreo.
     *
     * @param string $value (required, string) The App Key provided by Dropbox after registering your application.
     * @return Dropbox_OAuth_FinalizeOAuth_Inputs For method chaining.
     */
    public function setAppKey($value)
    {
        return $this->set('AppKey', $value);
    }

    /**
     * Set the value for the AppSecret input for this FinalizeOAuth Choreo.
     *
     * @param string $value (required, string) The App Secret provided by Dropbox after registering your application.
     * @return Dropbox_OAuth_FinalizeOAuth_Inputs For method chaining.
     */
    public function setAppSecret($value)
    {
        return $this->set('AppSecret', $value);
    }

    /**
     * Set the value for the CallbackID input for this FinalizeOAuth Choreo.
     *
     * @param string $value (required, string) The callback token returned by the InitializeOAuth Choreo. Used to retrieve the callback data after the user authorizes.
     * @return Dropbox_OAuth_FinalizeOAuth_Inputs For method chaining.
     */
    public function setCallbackID($value)
    {
        return $this->set('CallbackID', $value);
    }

    /**
     * Set the value for the DropboxAppKey input for this FinalizeOAuth Choreo.
     *
     * @param string $value (required, string) Deprecated (retained for backward compatibility only).
     * @return Dropbox_OAuth_FinalizeOAuth_Inputs For method chaining.
     */
    public function setDropboxAppKey($value)
    {
        return $this->set('DropboxAppKey', $value);
    }

    /**
     * Set the value for the DropboxAppSecret input for this FinalizeOAuth Choreo.
     *
     * @param string $value (required, string) Deprecated (retained for backward compatibility only).
     * @return Dropbox_OAuth_FinalizeOAuth_Inputs For method chaining.
     */
    public function setDropboxAppSecret($value)
    {
        return $this->set('DropboxAppSecret', $value);
    }

    /**
     * Set the value for the OAuthTokenSecret input for this FinalizeOAuth Choreo.
     *
     * @param string $value (required, string) Deprecated (retained for backward compatibility only).
     * @return Dropbox_OAuth_FinalizeOAuth_Inputs For method chaining.
     */
    public function setOAuthTokenSecret($value)
    {
        return $this->set('OAuthTokenSecret', $value);
    }

    /**
     * Set the value for the SuppressErrors input for this FinalizeOAuth Choreo.
     *
     * @param bool $value (optional, boolean) When set to true, errors received during the OAuth redirect process will be suppressed and returned in the ErrorMessage output.
     * @return Dropbox_OAuth_FinalizeOAuth_Inputs For method chaining.
     */
    public function setSuppressErrors($value)
    {
        return $this->set('SuppressErrors', $value);
    }

    /**
     * Set the value for the Timeout input for this FinalizeOAuth Choreo.
     *
     * @param int $value (optional, integer) The amount of time (in seconds) to poll your Temboo callback URL to see if your app's user has allowed or denied the request for access. Defaults to 20. Max is 60.
     * @return Dropbox_OAuth_FinalizeOAuth_Inputs For method chaining.
     */
    public function setTimeout($value)
    {
        return $this->set('Timeout', $value);
    }
}


/**
 * Execution object for the FinalizeOAuth Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_OAuth_FinalizeOAuth_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the FinalizeOAuth Choreo.
     *
     * @param Temboo_Session $session The session that owns this FinalizeOAuth execution.
     * @param Dropbox_OAuth_FinalizeOAuth $choreo The choreography object for this execution.
     * @param Dropbox_OAuth_FinalizeOAuth_Inputs|array $inputs (optional) Inputs as Dropbox_OAuth_FinalizeOAuth_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dropbox_OAuth_FinalizeOAuth_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Dropbox_OAuth_FinalizeOAuth $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this FinalizeOAuth execution.
     *
     * @return Dropbox_OAuth_FinalizeOAuth_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this FinalizeOAuth execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Dropbox_OAuth_FinalizeOAuth_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Dropbox_OAuth_FinalizeOAuth_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the FinalizeOAuth Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_OAuth_FinalizeOAuth_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the FinalizeOAuth Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Dropbox_OAuth_FinalizeOAuth_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "AccessToken" output from this FinalizeOAuth execution.
     *
     * @return string (string) The access token for the user that has granted access to your application.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getAccessToken()
    {
        return $this->get('AccessToken');
    }
    /**
     * Retrieve the value for the "AccessTokenSecret" output from this FinalizeOAuth execution.
     *
     * @return string (string) Deprecated (retained for backward compatibility only).
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getAccessTokenSecret()
    {
        return $this->get('AccessTokenSecret');
    }
    /**
     * Retrieve the value for the "AccountID" output from this FinalizeOAuth execution.
     *
     * @return string (string) The user's account identifier.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getAccountID()
    {
        return $this->get('AccountID');
    }
    /**
     * Retrieve the value for the "ErrorMessage" output from this FinalizeOAuth execution.
     *
     * @return string (string) Contains an error message if an error occurs during the OAuth redirect process and if SuppressErrors is set to true.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getErrorMessage()
    {
        return $this->get('ErrorMessage');
    }
    /**
     * Retrieve the value for the "UserID" output from this FinalizeOAuth execution.
     *
     * @return int (integer) Deprecated (retained for backward compatibility only).
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getUserID()
    {
        return $this->get('UserID');
    }
    /**
     * Retrieve the value for the "Response" output from this FinalizeOAuth execution.
     *
     * @return string (json) The response from Dropbox.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Creates an OAuth 2.0 access token from the supplied OAuth 1.0 access token.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_OAuth_FromOAuth1 extends Temboo_Choreography
{
    /**
     * Creates an OAuth 2.0 access token from the supplied OAuth 1.0 access token.
     *
     * @param Temboo_Session $session The session that owns this FromOAuth1 Choreo.
     * @return Dropbox_OAuth_FromOAuth1 New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Dropbox/OAuth/FromOAuth1/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this FromOAuth1 Choreo.
     *
     * @param Dropbox_OAuth_FromOAuth1_Inputs|array $inputs (optional) Inputs as Dropbox_OAuth_FromOAuth1_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dropbox_OAuth_FromOAuth1_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Dropbox_OAuth_FromOAuth1_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this FromOAuth1 Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dropbox_OAuth_FromOAuth1_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Dropbox_OAuth_FromOAuth1_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the FromOAuth1 Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_OAuth_FromOAuth1_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the FromOAuth1 Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dropbox_OAuth_FromOAuth1_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this FromOAuth1 input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Dropbox_OAuth_FromOAuth1_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Dropbox_OAuth_FromOAuth1_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this FromOAuth1 Choreo.
     *
     * @param string $value (required, string) An OAuth 1.0 access token for a specific Dropbox user.
     * @return Dropbox_OAuth_FromOAuth1_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the AccessTokenSecret input for this FromOAuth1 Choreo.
     *
     * @param string $value (required, string) An OAuth 1.0 access token secret for a specific Dropbox user.
     * @return Dropbox_OAuth_FromOAuth1_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AppKey input for this FromOAuth1 Choreo.
     *
     * @param string $value (required, string) The App Key provided by Dropbox after registering your application.
     * @return Dropbox_OAuth_FromOAuth1_Inputs For method chaining.
     */
    public function setAppKey($value)
    {
        return $this->set('AppKey', $value);
    }

    /**
     * Set the value for the AppSecret input for this FromOAuth1 Choreo.
     *
     * @param string $value (required, string) The App Secret provided by Dropbox after registering your application.
     * @return Dropbox_OAuth_FromOAuth1_Inputs For method chaining.
     */
    public function setAppSecret($value)
    {
        return $this->set('AppSecret', $value);
    }
}


/**
 * Execution object for the FromOAuth1 Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_OAuth_FromOAuth1_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the FromOAuth1 Choreo.
     *
     * @param Temboo_Session $session The session that owns this FromOAuth1 execution.
     * @param Dropbox_OAuth_FromOAuth1 $choreo The choreography object for this execution.
     * @param Dropbox_OAuth_FromOAuth1_Inputs|array $inputs (optional) Inputs as Dropbox_OAuth_FromOAuth1_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dropbox_OAuth_FromOAuth1_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Dropbox_OAuth_FromOAuth1 $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this FromOAuth1 execution.
     *
     * @return Dropbox_OAuth_FromOAuth1_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this FromOAuth1 execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Dropbox_OAuth_FromOAuth1_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Dropbox_OAuth_FromOAuth1_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the FromOAuth1 Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_OAuth_FromOAuth1_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the FromOAuth1 Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Dropbox_OAuth_FromOAuth1_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "OAuth2AccessToken" output from this FromOAuth1 execution.
     *
     * @return string (string) The OAuth 2.0 access for a specific Dropbox user.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getOAuth2AccessToken()
    {
        return $this->get('OAuth2AccessToken');
    }
}

/**
 * Generates an authorization URL that an application can use to complete the first step in the OAuth process.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_OAuth_InitializeOAuth extends Temboo_Choreography
{
    /**
     * Generates an authorization URL that an application can use to complete the first step in the OAuth process.
     *
     * @param Temboo_Session $session The session that owns this InitializeOAuth Choreo.
     * @return Dropbox_OAuth_InitializeOAuth New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Dropbox/OAuth/InitializeOAuth/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this InitializeOAuth Choreo.
     *
     * @param Dropbox_OAuth_InitializeOAuth_Inputs|array $inputs (optional) Inputs as Dropbox_OAuth_InitializeOAuth_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dropbox_OAuth_InitializeOAuth_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Dropbox_OAuth_InitializeOAuth_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this InitializeOAuth Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dropbox_OAuth_InitializeOAuth_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Dropbox_OAuth_InitializeOAuth_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the InitializeOAuth Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_OAuth_InitializeOAuth_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the InitializeOAuth Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dropbox_OAuth_InitializeOAuth_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this InitializeOAuth input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Dropbox_OAuth_InitializeOAuth_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Dropbox_OAuth_InitializeOAuth_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AppKey input for this InitializeOAuth Choreo.
     *
     * @param string $value (required, string) The App Key provided by Dropbox after registering your application.
     * @return Dropbox_OAuth_InitializeOAuth_Inputs For method chaining.
     */
    public function setAppKey($value)
    {
        return $this->set('AppKey', $value);
    }

    /**
     * Set the value for the CustomCallbackID input for this InitializeOAuth Choreo.
     *
     * @param string $value (optional, string) A unique identifier that you can pass to eliminate the need to wait for a Temboo generated CallbackID. Callback identifiers may only contain numbers, letters, periods, and hyphens.
     * @return Dropbox_OAuth_InitializeOAuth_Inputs For method chaining.
     */
    public function setCustomCallbackID($value)
    {
        return $this->set('CustomCallbackID', $value);
    }

    /**
     * Set the value for the DropboxAppKey input for this InitializeOAuth Choreo.
     *
     * @param string $value (required, string) Deprecated (retained for backward compatibility only).
     * @return Dropbox_OAuth_InitializeOAuth_Inputs For method chaining.
     */
    public function setDropboxAppKey($value)
    {
        return $this->set('DropboxAppKey', $value);
    }

    /**
     * Set the value for the DropboxAppSecret input for this InitializeOAuth Choreo.
     *
     * @param string $value (required, string) Deprecated (retained for backward compatibility only).
     * @return Dropbox_OAuth_InitializeOAuth_Inputs For method chaining.
     */
    public function setDropboxAppSecret($value)
    {
        return $this->set('DropboxAppSecret', $value);
    }

    /**
     * Set the value for the ForwardingURL input for this InitializeOAuth Choreo.
     *
     * @param string $value (optional, string) The URL that Temboo will redirect your users to after they grant access to your application. This should include the "https://" or "http://" prefix and be a fully qualified URL.
     * @return Dropbox_OAuth_InitializeOAuth_Inputs For method chaining.
     */
    public function setForwardingURL($value)
    {
        return $this->set('ForwardingURL', $value);
    }
}


/**
 * Execution object for the InitializeOAuth Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_OAuth_InitializeOAuth_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the InitializeOAuth Choreo.
     *
     * @param Temboo_Session $session The session that owns this InitializeOAuth execution.
     * @param Dropbox_OAuth_InitializeOAuth $choreo The choreography object for this execution.
     * @param Dropbox_OAuth_InitializeOAuth_Inputs|array $inputs (optional) Inputs as Dropbox_OAuth_InitializeOAuth_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dropbox_OAuth_InitializeOAuth_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Dropbox_OAuth_InitializeOAuth $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this InitializeOAuth execution.
     *
     * @return Dropbox_OAuth_InitializeOAuth_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this InitializeOAuth execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Dropbox_OAuth_InitializeOAuth_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Dropbox_OAuth_InitializeOAuth_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the InitializeOAuth Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_OAuth_InitializeOAuth_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the InitializeOAuth Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Dropbox_OAuth_InitializeOAuth_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "AuthorizationURL" output from this InitializeOAuth execution.
     *
     * @return string (string) The authorization URL that the application's user needs to go to in order to grant access to your application.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getAuthorizationURL()
    {
        return $this->get('AuthorizationURL');
    }
    /**
     * Retrieve the value for the "CallbackID" output from this InitializeOAuth execution.
     *
     * @return string (string) An ID used to retrieve the callback data that Temboo stores once your application's user authorizes.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getCallbackID()
    {
        return $this->get('CallbackID');
    }
    /**
     * Retrieve the value for the "OAuthTokenSecret" output from this InitializeOAuth execution.
     *
     * @return string (string) Deprecated (retained for backward compatibility only).
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getOAuthTokenSecret()
    {
        return $this->get('OAuthTokenSecret');
    }
}

/**
 * Disables the access token used to authenticate the call.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_OAuth_Revoke extends Temboo_Choreography
{
    /**
     * Disables the access token used to authenticate the call.
     *
     * @param Temboo_Session $session The session that owns this Revoke Choreo.
     * @return Dropbox_OAuth_Revoke New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Dropbox/OAuth/Revoke/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this Revoke Choreo.
     *
     * @param Dropbox_OAuth_Revoke_Inputs|array $inputs (optional) Inputs as Dropbox_OAuth_Revoke_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dropbox_OAuth_Revoke_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Dropbox_OAuth_Revoke_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this Revoke Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dropbox_OAuth_Revoke_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Dropbox_OAuth_Revoke_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the Revoke Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_OAuth_Revoke_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the Revoke Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dropbox_OAuth_Revoke_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this Revoke input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Dropbox_OAuth_Revoke_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Dropbox_OAuth_Revoke_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this Revoke Choreo.
     *
     * @param string $value (required, string) The access token for a specific Dropbox user.
     * @return Dropbox_OAuth_Revoke_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }
}


/**
 * Execution object for the Revoke Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_OAuth_Revoke_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the Revoke Choreo.
     *
     * @param Temboo_Session $session The session that owns this Revoke execution.
     * @param Dropbox_OAuth_Revoke $choreo The choreography object for this execution.
     * @param Dropbox_OAuth_Revoke_Inputs|array $inputs (optional) Inputs as Dropbox_OAuth_Revoke_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dropbox_OAuth_Revoke_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Dropbox_OAuth_Revoke $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this Revoke execution.
     *
     * @return Dropbox_OAuth_Revoke_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this Revoke execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Dropbox_OAuth_Revoke_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Dropbox_OAuth_Revoke_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the Revoke Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_OAuth_Revoke_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the Revoke Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Dropbox_OAuth_Revoke_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this Revoke execution.
     *
     * @return string (json) The response from Dropbox.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Creates a shared link.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_Sharing_CreateSharedLink extends Temboo_Choreography
{
    /**
     * Creates a shared link.
     *
     * @param Temboo_Session $session The session that owns this CreateSharedLink Choreo.
     * @return Dropbox_Sharing_CreateSharedLink New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Dropbox/Sharing/CreateSharedLink/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this CreateSharedLink Choreo.
     *
     * @param Dropbox_Sharing_CreateSharedLink_Inputs|array $inputs (optional) Inputs as Dropbox_Sharing_CreateSharedLink_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dropbox_Sharing_CreateSharedLink_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Dropbox_Sharing_CreateSharedLink_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CreateSharedLink Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dropbox_Sharing_CreateSharedLink_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Dropbox_Sharing_CreateSharedLink_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CreateSharedLink Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_Sharing_CreateSharedLink_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the CreateSharedLink Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dropbox_Sharing_CreateSharedLink_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CreateSharedLink input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Dropbox_Sharing_CreateSharedLink_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Dropbox_Sharing_CreateSharedLink_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this CreateSharedLink Choreo.
     *
     * @param string $value (required, string) The access token for a specific Dropbox user.
     * @return Dropbox_Sharing_CreateSharedLink_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Path input for this CreateSharedLink Choreo.
     *
     * @param string $value (required, string) The path to share.
     * @return Dropbox_Sharing_CreateSharedLink_Inputs For method chaining.
     */
    public function setPath($value)
    {
        return $this->set('Path', $value);
    }

    /**
     * Set the value for the ShortURL input for this CreateSharedLink Choreo.
     *
     * @param bool $value (optional, boolean) Whether to return a shortened URL. The default for this field is false.
     * @return Dropbox_Sharing_CreateSharedLink_Inputs For method chaining.
     */
    public function setShortURL($value)
    {
        return $this->set('ShortURL', $value);
    }
}


/**
 * Execution object for the CreateSharedLink Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_Sharing_CreateSharedLink_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CreateSharedLink Choreo.
     *
     * @param Temboo_Session $session The session that owns this CreateSharedLink execution.
     * @param Dropbox_Sharing_CreateSharedLink $choreo The choreography object for this execution.
     * @param Dropbox_Sharing_CreateSharedLink_Inputs|array $inputs (optional) Inputs as Dropbox_Sharing_CreateSharedLink_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dropbox_Sharing_CreateSharedLink_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Dropbox_Sharing_CreateSharedLink $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CreateSharedLink execution.
     *
     * @return Dropbox_Sharing_CreateSharedLink_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this CreateSharedLink execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Dropbox_Sharing_CreateSharedLink_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Dropbox_Sharing_CreateSharedLink_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the CreateSharedLink Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_Sharing_CreateSharedLink_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the CreateSharedLink Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Dropbox_Sharing_CreateSharedLink_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this CreateSharedLink execution.
     *
     * @return string (json) The response from Dropbox.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Revokes a shared link.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_Sharing_RevokeSharedLink extends Temboo_Choreography
{
    /**
     * Revokes a shared link.
     *
     * @param Temboo_Session $session The session that owns this RevokeSharedLink Choreo.
     * @return Dropbox_Sharing_RevokeSharedLink New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Dropbox/Sharing/RevokeSharedLink/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this RevokeSharedLink Choreo.
     *
     * @param Dropbox_Sharing_RevokeSharedLink_Inputs|array $inputs (optional) Inputs as Dropbox_Sharing_RevokeSharedLink_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dropbox_Sharing_RevokeSharedLink_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Dropbox_Sharing_RevokeSharedLink_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this RevokeSharedLink Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dropbox_Sharing_RevokeSharedLink_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Dropbox_Sharing_RevokeSharedLink_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the RevokeSharedLink Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_Sharing_RevokeSharedLink_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the RevokeSharedLink Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dropbox_Sharing_RevokeSharedLink_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this RevokeSharedLink input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Dropbox_Sharing_RevokeSharedLink_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Dropbox_Sharing_RevokeSharedLink_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this RevokeSharedLink Choreo.
     *
     * @param string $value (required, string) The access token for a specific Dropbox user.
     * @return Dropbox_Sharing_RevokeSharedLink_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the URL input for this RevokeSharedLink Choreo.
     *
     * @param string $value (required, string) The URL of the shared link.
     * @return Dropbox_Sharing_RevokeSharedLink_Inputs For method chaining.
     */
    public function setURL($value)
    {
        return $this->set('URL', $value);
    }
}


/**
 * Execution object for the RevokeSharedLink Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_Sharing_RevokeSharedLink_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the RevokeSharedLink Choreo.
     *
     * @param Temboo_Session $session The session that owns this RevokeSharedLink execution.
     * @param Dropbox_Sharing_RevokeSharedLink $choreo The choreography object for this execution.
     * @param Dropbox_Sharing_RevokeSharedLink_Inputs|array $inputs (optional) Inputs as Dropbox_Sharing_RevokeSharedLink_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dropbox_Sharing_RevokeSharedLink_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Dropbox_Sharing_RevokeSharedLink $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this RevokeSharedLink execution.
     *
     * @return Dropbox_Sharing_RevokeSharedLink_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this RevokeSharedLink execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Dropbox_Sharing_RevokeSharedLink_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Dropbox_Sharing_RevokeSharedLink_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the RevokeSharedLink Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_Sharing_RevokeSharedLink_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the RevokeSharedLink Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Dropbox_Sharing_RevokeSharedLink_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this RevokeSharedLink execution.
     *
     * @return string (json) The response from Dropbox.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves information about a user's account.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_Users_GetAccount extends Temboo_Choreography
{
    /**
     * Retrieves information about a user's account.
     *
     * @param Temboo_Session $session The session that owns this GetAccount Choreo.
     * @return Dropbox_Users_GetAccount New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Dropbox/Users/GetAccount/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetAccount Choreo.
     *
     * @param Dropbox_Users_GetAccount_Inputs|array $inputs (optional) Inputs as Dropbox_Users_GetAccount_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dropbox_Users_GetAccount_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Dropbox_Users_GetAccount_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetAccount Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dropbox_Users_GetAccount_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Dropbox_Users_GetAccount_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetAccount Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_Users_GetAccount_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetAccount Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dropbox_Users_GetAccount_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetAccount input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Dropbox_Users_GetAccount_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Dropbox_Users_GetAccount_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this GetAccount Choreo.
     *
     * @param string $value (required, string) The access token for a specific Dropbox user.
     * @return Dropbox_Users_GetAccount_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the AccountID input for this GetAccount Choreo.
     *
     * @param string $value (required, string) A user's account identifier.
     * @return Dropbox_Users_GetAccount_Inputs For method chaining.
     */
    public function setAccountID($value)
    {
        return $this->set('AccountID', $value);
    }
}


/**
 * Execution object for the GetAccount Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_Users_GetAccount_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetAccount Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetAccount execution.
     * @param Dropbox_Users_GetAccount $choreo The choreography object for this execution.
     * @param Dropbox_Users_GetAccount_Inputs|array $inputs (optional) Inputs as Dropbox_Users_GetAccount_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dropbox_Users_GetAccount_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Dropbox_Users_GetAccount $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetAccount execution.
     *
     * @return Dropbox_Users_GetAccount_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this GetAccount execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Dropbox_Users_GetAccount_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Dropbox_Users_GetAccount_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetAccount Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_Users_GetAccount_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetAccount Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Dropbox_Users_GetAccount_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetAccount execution.
     *
     * @return string (json) The response from Dropbox.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves information about the current user's account.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_Users_GetCurrentAccount extends Temboo_Choreography
{
    /**
     * Retrieves information about the current user's account.
     *
     * @param Temboo_Session $session The session that owns this GetCurrentAccount Choreo.
     * @return Dropbox_Users_GetCurrentAccount New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Dropbox/Users/GetCurrentAccount/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetCurrentAccount Choreo.
     *
     * @param Dropbox_Users_GetCurrentAccount_Inputs|array $inputs (optional) Inputs as Dropbox_Users_GetCurrentAccount_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dropbox_Users_GetCurrentAccount_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Dropbox_Users_GetCurrentAccount_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetCurrentAccount Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dropbox_Users_GetCurrentAccount_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Dropbox_Users_GetCurrentAccount_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetCurrentAccount Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_Users_GetCurrentAccount_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetCurrentAccount Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dropbox_Users_GetCurrentAccount_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetCurrentAccount input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Dropbox_Users_GetCurrentAccount_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Dropbox_Users_GetCurrentAccount_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this GetCurrentAccount Choreo.
     *
     * @param string $value (required, string) The access token for a specific Dropbox user.
     * @return Dropbox_Users_GetCurrentAccount_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }
}


/**
 * Execution object for the GetCurrentAccount Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_Users_GetCurrentAccount_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetCurrentAccount Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetCurrentAccount execution.
     * @param Dropbox_Users_GetCurrentAccount $choreo The choreography object for this execution.
     * @param Dropbox_Users_GetCurrentAccount_Inputs|array $inputs (optional) Inputs as Dropbox_Users_GetCurrentAccount_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dropbox_Users_GetCurrentAccount_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Dropbox_Users_GetCurrentAccount $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetCurrentAccount execution.
     *
     * @return Dropbox_Users_GetCurrentAccount_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this GetCurrentAccount execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Dropbox_Users_GetCurrentAccount_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Dropbox_Users_GetCurrentAccount_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetCurrentAccount Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_Users_GetCurrentAccount_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetCurrentAccount Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Dropbox_Users_GetCurrentAccount_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetCurrentAccount execution.
     *
     * @return string (json) The response from Dropbox.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

?>