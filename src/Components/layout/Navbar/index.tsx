import Image from "next/image";
import Link from "next/link";

export default function Navbar() {
  return (
    <nav className="flex gap-12 justify-center items-center py-3 bg-bgSite text-white ">
      <div className="font-roboto-condensed">
        <h1 className="text-base font-medium">LorsseWatch</h1>
      </div>
      <div>
        <ul className="flex gap-5 font-roboto-condensed">
          <div>
            <li className="text-xs font-light">New</li>
            <span></span>
          </div>
          <div>
            <li className="text-xs font-light">Anime</li>
            <span></span>
          </div>
          <div>
            <li className="text-xs font-light">Episode</li>
            <span></span>
          </div>
        </ul>
      </div>

      <div>
        <Link href="login">
          <Image
            src="/Images/Users_mb.svg"
            width={20}
            height={20}
            alt="Image user mobile"
          ></Image>
        </Link>
      </div>
    </nav>
  );
}
