"use client";

import Autoplay from "embla-carousel-autoplay";
import * as React from "react";

import {
  Carousel,
  CarouselContent,
  CarouselItem,
} from "@/src/Components/ui/carousel";
import Image from "next/image";

export default function Presentation() {
  const plugin = React.useRef(
    Autoplay({ delay: 10000, stopOnInteraction: true })
  );
  // let lienImage = ["", ""];
  return (
    <div>
      <Carousel
        plugins={[plugin.current]}
        onMouseEnter={plugin.current.stop}
        onMouseLeave={plugin.current.reset}
      >
        <CarouselContent>
          {Array.from({ length: 3 }).map((_, index) => (
            <CarouselItem key={index}>
              <div>
                <div>
                  <Image
                    src="/Images/Annonce.svg"
                    height={100}
                    width={100}
                    alt="Image annonce"
                    className="w-full h-52 object-cover"
                  />
                </div>
                <div>
                  <h2></h2>
                  <p></p>
                  <button></button>
                </div>
              </div>
            </CarouselItem>
          ))}
        </CarouselContent>
      </Carousel>
    </div>
  );
}
