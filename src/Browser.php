<?php
/**
 * The file for a browser
 *
 * @author     Jack Clayton <clayjs0@gmail.com>
 * @copyright  2016 Jack Clayton
 * @license    MIT
 */
namespace Jstewmc\Browser;
/**
 * A browser
 *
 * @since  0.1.0
 */
class Browser
{
    /* !Private properties */
    
    /**
     * @var    string|null  the browser's name (e.g., "Safari")
     * @since  0.1.0
     */
    private $name;
    
    /**
     * @var    string|null  the browser's platform  (e.g., "Macintosh")
     * @since  0.1.0
     */
    private $platform;
    
    /**
     * @var    string|null  the browser's version  (e.g., "10.0.1")
     * @since  0.1.0
     */
    private $version;
    
    
    /* !Get methods */
    
    /**
     * Returns the browser's name
     *
     * @return  string|null
     * @since   0.1.0
     */
    public function getName()
    {
        return $this->name;
    }
    
    /**
     * Returns the browser's platform
     *
     * @return  string|null
     * @since   0.1.0
     */
    public function getPlatform()
    {
        return $this->platform;
    }
    
    /**
     * Returns the browser's version
     *
     * @return  string|null
     * @since   0.1.0
     */
    public function getVersion()
    {
        return $this->version;
    }
    
    
    /* !Set methods */
    
    /**
     * Sets the browser's name 
     *
     * @param   string|null  $browser  the browser's name
     * @return  self
     * @since   0.1.0
     */
    public function setName(string $name = null): self
    {
        $this->name = $name;
        
        return $this;
    }
    
    /**
     * Sets the client's platform name
     *
     * @param   string|null  $platform  the browser's platform
     * @return  Request
     * @since   0.1.0
     */
    public function setPlatform(string $platform = null): self
    {
        $this->platform = $platform;
        
        return $this;
    }
    
    /**
     * Sets the client's browser version
     *
     * @param   string|null  $version  the browser's version
     * @return  Request
     * @since   0.1.0
     */
    public function setVersion(string $version = null): self
    {
        $this->version = $version;
        
        return $this;
    }
}
