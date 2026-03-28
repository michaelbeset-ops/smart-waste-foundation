import { Link } from "react-router-dom";
import { Mail, Phone, MapPin } from "lucide-react";

const Footer = () => {
  return (
    <footer className="bg-navy text-primary-foreground">
      <div className="container mx-auto px-4 py-16">
        <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10">
          {/* Brand */}
          <div>
            <h3 className="font-heading text-xl font-bold mb-4">B-Advice</h3>
            <p className="text-primary-foreground/70 text-sm leading-relaxed">
              Uw specialist in afvalinzameling, containerbeheer en SMART waste
              management oplossingen voor gemeenten en organisaties.
            </p>
          </div>

          {/* Links */}
          <div>
            <h4 className="font-heading text-sm font-bold uppercase tracking-wider mb-4 text-accent">
              Navigatie
            </h4>
            <ul className="space-y-2">
              {[
                { label: "Over ons", href: "/over-ons" },
                { label: "Diensten", href: "/diensten" },
                { label: "B-Organized", href: "/b-organized" },
                { label: "Nieuws", href: "/nieuws" },
                { label: "Contact", href: "/contact" },
              ].map((link) => (
                <li key={link.href}>
                  <Link
                    to={link.href}
                    className="text-sm text-primary-foreground/70 hover:text-accent transition-colors"
                  >
                    {link.label}
                  </Link>
                </li>
              ))}
            </ul>
          </div>

          {/* Contact */}
          <div>
            <h4 className="font-heading text-sm font-bold uppercase tracking-wider mb-4 text-accent">
              Contact
            </h4>
            <ul className="space-y-3">
              <li className="flex items-center gap-2 text-sm text-primary-foreground/70">
                <Mail size={16} className="text-accent shrink-0" />
                <a href="mailto:info@b-advice.info" className="hover:text-accent transition-colors">
                  info@b-advice.info
                </a>
              </li>
              <li className="flex items-center gap-2 text-sm text-primary-foreground/70">
                <Phone size={16} className="text-accent shrink-0" />
                <a href="tel:+31643125245" className="hover:text-accent transition-colors">
                  +31 (6) 431 25 245
                </a>
              </li>
              <li className="flex items-start gap-2 text-sm text-primary-foreground/70">
                <MapPin size={16} className="text-accent shrink-0 mt-0.5" />
                <span>Achterdijk 26, Nieuwland (UT)</span>
              </li>
            </ul>
          </div>

          {/* B-Organized */}
          <div>
            <h4 className="font-heading text-sm font-bold uppercase tracking-wider mb-4 text-accent">
              B-Organized
            </h4>
            <p className="text-sm text-primary-foreground/70 mb-4">
              Direct toegang tot uw beheerplatform voor inzamelmiddelen.
            </p>
            <a
              href="https://b-organized.info/login"
              target="_blank"
              rel="noopener noreferrer"
              className="inline-flex items-center gap-2 bg-green hover:bg-green-dark text-accent-foreground px-5 py-2.5 rounded-lg text-sm font-semibold transition-colors"
            >
              Login B-Organized
            </a>
          </div>
        </div>

        <div className="border-t border-primary-foreground/10 mt-12 pt-8 flex flex-col sm:flex-row items-center justify-between gap-4">
          <p className="text-xs text-primary-foreground/50">
            © {new Date().getFullYear()} B-Advice. Alle rechten voorbehouden.
          </p>
          <div className="flex gap-4">
            <Link to="/privacybeleid" className="text-xs text-primary-foreground/50 hover:text-accent transition-colors">
              Privacybeleid
            </Link>
            <Link to="/cookiebeleid" className="text-xs text-primary-foreground/50 hover:text-accent transition-colors">
              Cookiebeleid
            </Link>
          </div>
        </div>
      </div>
    </footer>
  );
};

export default Footer;
