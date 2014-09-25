<?php
namespace Dossier\Entities;
/**
 * Created by PhpStorm.
 * User: kayladnls
 * Date: 9/22/14
 * Time: 2:05 PM
 */

/**
 * @Entity @Table(name="feedback_sources")
 **/
class FeedbackSource
{
    /** @Id @Column(type="integer") @GeneratedValue **/
    protected $id;

    /** @Column(type="string") **/
    protected $name;
} 