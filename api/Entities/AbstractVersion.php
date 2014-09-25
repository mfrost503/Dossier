<?php
namespace Dossier\Entities;
/**
 * Created by PhpStorm.
 * User: kayladnls
 * Date: 9/22/14
 * Time: 2:05 PM
 */

/**
 * @Entity @Table(name="abstract_versions")
 **/
class AbstractVersion
{
    /** @Id @Column(type="integer") @GeneratedValue **/
    protected $id;

    /**
     * @ManyToOne(targetEntity="TalkAbstract")
     **/
    protected $abstract;


    /** @Column(type="string") **/
    protected $title;

    /** @Column(type="string") **/
    protected $content;

    /** @Column(type="datetime") **/
    protected $created_at;

    /** @Column(type="datetime") **/
    protected $updated_at;
} 