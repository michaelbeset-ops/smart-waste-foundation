import { useState, useEffect } from "react";
import { Link, useLocation } from "react-router-dom";
import { Menu, X } from "lucide-react";

const navItems = [
  { label: "Over ons", href: "/over-ons" },
  { label: "Diensten", href: "/diensten" },
  { label: "B-Organized", href: "/b-organized" },
  { label: "Bestellingen", href: "/bestellingen" },
  { label: "Nieuws", href: "/nieuws" },
  { label: "Contact", href: "/contact" },
];

const Navbar = () => {
  const [scrolled, setScrolled] = useState(false);
  const [mobileOpen, setMobileOpen] = useState(false);
  const location = useLocation();

  useEffect(() => {
    const onScroll = () => setScrolled(window.scrollY > 20);
    window.addEventListener("scroll", onScroll);
    return () => window.removeEventListener("scroll", onScroll);
  }, []);

  useEffect(() => {
    setMobileOpen(false);
  }, [location]);

  return (
    <header
      className={`fixed top-0 left-0 right-0 z-50 transition-all duration-300 ${
        scrolled
          ? "bg-navy shadow-lg py-2"
          : "bg-navy/95 py-4"
      }`}
    >
      <div className="container mx-auto px-4 flex items-center justify-between">
        <Link to="/" className="flex items-center gap-2">
          <span className="font-heading text-2xl font-bold text-primary-foreground tracking-tight">
            B-Advice
          </span>
        </Link>

        {/* Desktop nav */}
        <nav className="hidden lg:flex items-center gap-1">
          {navItems.map((item) => (
            <Link
              key={item.href}
              to={item.href}
              className={`px-4 py-2 text-sm font-medium rounded-md transition-colors ${
                location.pathname === item.href
                  ? "text-accent"
                  : "text-primary-foreground/80 hover:text-primary-foreground"
              }`}
            >
              {item.label}
            </Link>
          ))}
        </nav>

        <div className="hidden lg:block">
          <a
            href="https://b-organized.info/login"
            target="_blank"
            rel="noopener noreferrer"
            className="inline-flex items-center gap-2 bg-green hover:bg-green-dark text-accent-foreground px-5 py-2.5 rounded-lg text-sm font-semibold transition-colors"
          >
            Login B-Organized
          </a>
        </div>

        {/* Mobile toggle */}
        <button
          onClick={() => setMobileOpen(!mobileOpen)}
          className="lg:hidden text-primary-foreground p-2"
          aria-label="Menu openen"
        >
          {mobileOpen ? <X size={24} /> : <Menu size={24} />}
        </button>
      </div>

      {/* Mobile menu */}
      {mobileOpen && (
        <div className="lg:hidden bg-navy border-t border-navy-light">
          <nav className="container mx-auto px-4 py-4 flex flex-col gap-2">
            {navItems.map((item) => (
              <Link
                key={item.href}
                to={item.href}
                className={`px-4 py-3 text-sm font-medium rounded-md transition-colors ${
                  location.pathname === item.href
                    ? "text-accent bg-navy-light"
                    : "text-primary-foreground/80 hover:text-primary-foreground hover:bg-navy-light"
                }`}
              >
                {item.label}
              </Link>
            ))}
            <a
              href="https://b-organized.info/login"
              target="_blank"
              rel="noopener noreferrer"
              className="inline-flex items-center justify-center gap-2 bg-green hover:bg-green-dark text-accent-foreground px-5 py-3 rounded-lg text-sm font-semibold transition-colors mt-2"
            >
              Login B-Organized
            </a>
          </nav>
        </div>
      )}
    </header>
  );
};

export default Navbar;
