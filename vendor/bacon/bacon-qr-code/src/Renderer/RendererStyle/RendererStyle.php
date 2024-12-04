<?php
declare(strict_types = 1);

namespace BaconQrCode\Renderer\RendererStyle;

use BaconQrCode\Renderer\Eye\EyeInterface;
use BaconQrCode\Renderer\Eye\ModuleEye;
use BaconQrCode\Renderer\Module\ModuleInterface;
use BaconQrCode\Renderer\Module\SquareModule;
use BaconQrCode\Renderer\RendererStyle\Fill;

final class RendererStyle
{
    /**
     * @var int
     */
    private $size;

    /**
     * @var int
     */
    private $margin;

    /**
     * @var ModuleInterface
     */
    private $module;

    /**
     * @var EyeInterface|null
     */
    private $eye;

    /**
     * @var Fill
     */
    private $fill;

    /**
     * @var Cutout
     *
     * @author GemPixel <https://gempixel.com> 
     * @version 7.4
     */
    private $cutoutWidth = 0,
            $cutoutHeight = 0;

    public function __construct(
        int $size,
        int $margin = 4,
        ?ModuleInterface $module = null,
        ?EyeInterface $eye = null,
        ?Fill $fill = null,
        $cutoutWidth = 0,
        $cutoutHeight = 0
    ) {
        $this->margin = $margin;
        $this->size = $size;
        $this->module = $module ?: SquareModule::instance();
        $this->eye = $eye ?: new ModuleEye($this->module);
        $this->fill = $fill ?: Fill::default();
        $this->cutoutWidth = (int) $cutoutWidth;
        $this->cutoutHeight = (int) $cutoutHeight;
    }

    public function withSize(int $size) : self
    {
        $style = clone $this;
        $style->size = $size;
        return $style;
    }

    public function getCutoutWidth() : int
    {
        return $this->cutoutWidth;
    }

    public function getCutoutHeight() : int
    {
        return $this->cutoutHeight;
    }

    public function withMargin(int $margin) : self
    {
        $style = clone $this;
        $style->margin = $margin;
        return $style;
    }

    public function getSize() : int
    {
        return $this->size;
    }

    public function getMargin() : int
    {
        return $this->margin;
    }

    public function getModule() : ModuleInterface
    {
        return $this->module;
    }

    public function getEye() : EyeInterface
    {
        return $this->eye;
    }

    public function getFill() : Fill
    {
        return $this->fill;
    }
}
