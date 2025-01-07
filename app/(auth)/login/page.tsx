import Link from "next/link";

export default function login() {
  return (
    <div className="h-full bg-bgSite text-white">
      <div>
        <h1 className="">Login</h1>
        <p>Welcome back. Enter your credentials to access your account</p>
      </div>
      <div>
        <div>
          <h2>Email Address</h2>
          <input type="email" name="" id="" />
        </div>
        <div>
          <h2>Password</h2>
          <Link href="">Forgot Password</Link>
          <input type="password" name="" id="" />
        </div>
        <input type="checkbox" name="" id="" />
        <p>Keep me signed in</p>
        <button></button>
      </div>
    </div>
  );
}
