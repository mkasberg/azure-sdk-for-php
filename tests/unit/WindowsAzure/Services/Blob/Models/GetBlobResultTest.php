<?php

/**
 * LICENSE: Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 * 
 * PHP version 5
 *
 * @category  Microsoft
 * @package   Tests\Unit\WindowsAzure\Services\Blob\Models
 * @author    Abdelrahman Elogeel <Abdelrahman.Elogeel@microsoft.com>
 * @copyright 2012 Microsoft Corporation
 * @license   http://www.apache.org/licenses/LICENSE-2.0  Apache License 2.0
 * @link      http://pear.php.net/package/azure-sdk-for-php
 */
namespace Tests\Unit\WindowsAzure\Services\Blob\Models;
use WindowsAzure\Utilities;
use WindowsAzure\Services\Blob\Models\GetBlobResult;
use WindowsAzure\Services\Blob\Models\BlobProperties;

/**
 * Unit tests for class GetBlobResult
 *
 * @category  Microsoft
 * @package   Tests\Unit\WindowsAzure\Services\Blob\Models
 * @author    Abdelrahman Elogeel <Abdelrahman.Elogeel@microsoft.com>
 * @copyright 2012 Microsoft Corporation
 * @license   http://www.apache.org/licenses/LICENSE-2.0  Apache License 2.0
 * @version   Release: @package_version@
 * @link      http://pear.php.net/package/azure-sdk-for-php
 */
class GetBlobResultTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @covers WindowsAzure\Services\Blob\Models\GetBlobResult::setMetadata
     */
    public function testSetMetadata()
    {
        // Setup
        $properties = new GetBlobResult();
        $expected = array('key1' => 'value1', 'key2' => 'value2');
        
        // Test
        $properties->setMetadata($expected);
        
        // Assert
        $this->assertEquals($expected, $properties->getMetadata());
    }
    
    /**
     * @covers WindowsAzure\Services\Blob\Models\GetBlobResult::getMetadata
     */
    public function testGetMetadata()
    {
        // Setup
        $properties = new GetBlobResult();
        $expected = array('key1' => 'value1', 'key2' => 'value2');
        $properties->setMetadata($expected);
        
        // Test
        $actual = $properties->getMetadata();
        
        // Assert
        $this->assertEquals($expected, $actual);
    }
    
    /**
     * @covers WindowsAzure\Services\Blob\Models\GetBlobResult::setProperties
     */
    public function testSetProperties()
    {
        // Setup
        $properties = new GetBlobResult();
        $expected = new BlobProperties();
        
        // Test
        $properties->setProperties($expected);
        
        // Assert
        $this->assertEquals($expected, $properties->getProperties());
    }
    
    /**
     * @covers WindowsAzure\Services\Blob\Models\GetBlobResult::getProperties
     */
    public function testGetProperties()
    {
        // Setup
        $properties = new GetBlobResult();
        $expected = new BlobProperties();
        $properties->setProperties($expected);
        
        // Test
        $actual = $properties->getProperties();
        
        // Assert
        $this->assertEquals($expected, $actual);
    }
    
    /**
     * @covers WindowsAzure\Services\Blob\Models\GetBlobResult::setContentStream
     * @covers WindowsAzure\Services\Blob\Models\GetBlobResult::getContentStream
     */
    public function testSetContentStream()
    {
        // Setup
        $expected = Utilities::stringToStream('0x8CAFB82EFF70C46');
        $result = new GetBlobResult();
        
        // Test
        $result->setContentStream($expected);
        
        // Assert
        $this->assertEquals($expected, $result->getContentStream());
    }
}

?>
