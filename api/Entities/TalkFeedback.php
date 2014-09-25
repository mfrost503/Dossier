<?php
namespace Dossier\Entities;
/**
 * Created by PhpStorm.
 * User: kayladnls
 * Date: 9/22/14
 * Time: 2:05 PM
 */

/**
 * @Entity @Table(name="talk_feedback")
 **/
class TalkFeedback
{
    /** @Id @Column(type="integer") @GeneratedValue **/
    protected $id;

    /**
     * @OneToOne(targetEntity="Talk")
     **/
    protected $talk;


    /**
     * @ManyToOne(targetEntity="FeedbackSource")
     **/
    protected $feedback_source;


    /** @Column(type="integer") **/
    protected $feedback_id;
} 