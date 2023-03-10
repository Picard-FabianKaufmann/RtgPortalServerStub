<?php
/**
 * Language
 */
namespace PicardFabianKaufmann\RtgServerStub\Models;

/**
 * Language
 */
class Language {

    /** @var int $id */
    public int $id;
    /** @var string $shortISO */
    public string $shortISO;
    /** @var string $languageName */
    public string $languageName;
    /** @var bool $isPublished */
    public bool $isPublished;
    /** @var string $created_at */
    public string $created_at;
    /** @var string|null $updated_at */
    public ?string $updated_at;

    /**
     *
     * constructor to unserialize array to model-properties
     *
     * @param array|null $array dataset array
     */
    public function __construct(?array $array = null) {

        if($array !== null) {
            foreach($array as $key => $value) {
                if(!property_exists(self::class, $key)) {
                    throw new \Exception('Try to assign nonexisting property \''.$key.'\'.');
                }
                $this->$key = $value;
            }
        }
    }
}


