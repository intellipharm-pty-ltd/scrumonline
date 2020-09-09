<?php
// model/session.php
/**
 * @Entity @Table(name="polls")
 **/
class Poll
{
    function __construct()
    {
      $this->startTime = new DateTime();
      $this->endTime = new DateTime();  
    }
  
    /** @Id @Column(type="integer") @GeneratedValue **/
    protected $id;
  
    /** @Column(type="string") **/
    protected $topic;

    /** @Column(type="text") **/
    protected $description;

    /** @Column(type="text") **/
    protected $customfield_11482;

    /** @Column(type="text") **/
    protected $customfield_11483;

    /** @Column(type="text") **/
    protected $customfield_11486;

    /** @Column(type="text") **/
    protected $priorityname;

    /** @Column(type="text") **/
    protected $priorityiconurl;

    /** @Column(type="string") **/
    protected $url;
  
    /** @Column(type="datetime") **/
    protected $startTime;
  
    /** @Column(type="datetime") **/
    protected $endTime;
  
    /** @Column(type="float") **/
    protected $result = 0;

    /** @Column(type="boolean") **/
    protected $consensus = false;
  
    /** @ManyToOne(targetEntity="Session", inversedBy="polls") **/
    protected $session;
  
    /** @OneToMany(targetEntity="Vote", mappedBy="poll") **/
    protected $votes;
  
    public function getId()
    {
        return $this->id;
    }
  
    // Getter and setter for topic field
    public function getTopic()
    {
        return $this->topic;
    }
    public function setTopic($topic)
    {
        $this->topic = $topic;
    }

    // Getter and setter for url field
    public function getUrl()
    {
        return $this->url;
    }
    public function setUrl($url)
    {
        $this->url = $url;
    }

    // Getter and setter for description field
    public function getDescription()
    {
        return $this->description;
    }
    public function setDescription($description)
    {
        $this->description = $description;
    }

    // Getter and setter for customfield_11482 field
    public function getCustomfield_11482()
    {
        return $this->customfield_11482;
    }
    public function setCustomfield_11482($customfield_11482)
    {
        $this->customfield_11482 = $customfield_11482;
    }

    // Getter and setter for customfield_11483 field
    public function getCustomfield_11483()
    {
        return $this->customfield_11483;
    }
    public function setCustomfield_11483($customfield_11483)
    {
        $this->customfield_11483 = $customfield_11483;
    }

    // Getter and setter for customfield_11486 field
    public function getCustomfield_11486()
    {
        return $this->customfield_11486;
    }
    public function setCustomfield_11486($customfield_11486)
    {
        $this->customfield_11486 = $customfield_11486;
    }

    // Getter and setter for priorityname field
    public function getPriorityname()
    {
        return $this->priorityname;
    }
    public function setPriorityname($priorityname)
    {
        $this->priorityname = $priorityname;
    }

    // Getter and setter for priorityiconurl field
    public function getPriorityiconurl()
    {
        return $this->priorityiconurl;
    }
    public function setPriorityiconurl($priorityiconurl)
    {
        $this->priorityiconurl = $priorityiconurl;
    }

    // Getter and setter for start time
    public function getStartTime()
    {
        return $this->startTime; 
    }
    public function setStartTime($startTime)
    {
        $this->startTime = $startTime;
    }

    // Getter and setter for end time
    public function getEndTime()
    {
        return $this->endTime; 
    }
    public function setEndTime($endTime)
    {
        $this->endTime = $endTime;
    }
  
  	 // Getter and setter for result field
    public function getResult()
    {
        return $this->result;
    }
    public function setResult($result)
    {
        $this->result = $result;
    }

  	 // Getter and setter for consensus field
    public function getConsensus()
    {
        return $this->consensus;
    }
    public function setConsensus($consensus)
    {
        $this->consensus = $consensus;
    }
  
    // Getter and setter for session field
    public function getSession()
    {
    	  return $this->session;
    }
    public function setSession($session)
    {
        $this->session = $session;
        $session->getPolls()->add($this);
    }
  
    // Getter and setter for votes association
    public function getVotes()
    {
    	  return $this->votes;
    }
}