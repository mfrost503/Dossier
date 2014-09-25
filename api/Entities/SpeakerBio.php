<?php
namespace Dossier\Entities;
/**
 * Created by PhpStorm.
 * User: kayladnls
 * Date: 9/22/14
 * Time: 2:05 PM
 */

/**
 * @Entity @Table(name="speaker_bios")
 **/
class SpeakerBio
{
    /** @Id @Column(type="integer") @GeneratedValue **/
    protected $id;

    /**
     * @OneToMany(targetEntity="Speaker")
     **/
    protected $speaker;


    /** @Column(type="string") **/
    protected $content;

    /**
     * @return mixed
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param mixed $content
     */
    public function setContent($content)
    {
        $this->content = $content;
    }
} 