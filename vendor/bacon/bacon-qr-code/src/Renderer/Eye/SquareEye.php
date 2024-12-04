<?php
declare(strict_types = 1);

namespace BaconQrCode\Renderer\Eye;

use BaconQrCode\Renderer\Path\Path;

/**
 * Renders the eyes in their default square shape.
 */
final class SquareEye implements EyeInterface
{
    /**
     * @var self|null
     */
    private static $instance;

    private function __construct()
    {
    }

    public static function instance() : self
    {
        return self::$instance ?: self::$instance = new self();
    }

    public function getExternalPath() : Path
    {
        $path = new Path;
            $path = $path->move(-3.5, -3.5)
            ->line(3.5, -3.5)
            ->line(3.5, 3.5)
            ->line(-3.5, 3.5)
            ->close()
            ->move(-2.5, -2.5)
            ->line(-2.5, 2.5)
            ->line(2.5, 2.5)
            ->line(2.5, -2.5)
            ->close();
            // for($i=-3.5; $i <= 3.5; $i = $i + 0.6){
            //     $path = $path
            //     ->move($i, -3.5)
            //     ->line($i, -3.0)
            //     ->line($i+0.5, -3.0)
            //     ->line($i+0.5, -3.5)
            //     ->close();
            // }
            // for($i=3.6; $i >= -3.6; $i = $i - 0.6){
            //     $path = $path
            //     ->move($i, 3.6)
            //     ->line($i, 3.1)
            //     ->line($i-0.5, 3.1)
            //     ->line($i-0.5, 3.6)
            //     ->close();
            // }
            // for($i = 3.0; $i >= -3.0; $i = $i - 0.6){
            //     $path = $path
            //         ->move(3.6, $i)
            //         ->line(3.1, $i)
            //         ->line(3.1, $i-0.5)
            //         ->line(3.6, $i-0.5)
            //         ->close();
            // }
            // for($i=-2.9; $i <= 2.9; $i = $i + 0.6){
            //     $path = $path
            //     ->move(-3.5, $i)
            //     ->line(-3.0, $i)
            //     ->line(-3.0, $i+0.5)
            //     ->line(-3.5, $i+0.5)
            //     ->close();
            // }
        return $path;           
    }

    public function getInternalPath() : Path
    {
        return (new Path())
            ->move(-1.5, -1.5)
            ->line(1.5, -1.5)
            ->line(1.5, 1.5)
            ->line(-1.5, 1.5)
            ->close()
        ;
    }
}
