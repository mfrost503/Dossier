<?php
namespace Dossier\Entities;
/**
 * Created by PhpStorm.
 * User: kayladnls
 * Date: 9/22/14
 * Time: 2:05 PM
 */

/**
 * @Entity @Table(name="talks")
 **/
class Talk
{
    /** @Id @Column(type="integer") @GeneratedValue **/
    protected $id;

    /**
     * @OneToMany(targetEntity="AbstractVersion")
     **/
    protected $abstract_version;

    /** @Column(type="string") **/
    protected $title;

    /** @Column(type="string") **/
    protected $slides_link;

    /** @Column(type="string") **/
    protected $video_link;
} 