import { Package, ArrowRight, Mail, Phone } from "lucide-react";
import { useScrollAnimation } from "@/hooks/use-scroll-animation";

const categories = [
  "Ondergrondse containers",
  "Bovengrondse containers",
  "Minicontainers",
  "Afvaleilanden",
  "Accessoires & onderdelen",
  "Refurbished containers",
];

const Bestellingen = () => {
  const scrollRef = useScrollAnimation();

  return (
    <div ref={scrollRef}>
      <section className="bg-navy py-24 lg:py-32">
        <div className="container mx-auto px-4">
          <div className="max-w-3xl">
            <h1 className="font-heading text-4xl md:text-5xl font-bold text-primary-foreground mb-6">
              Bestellingen
            </h1>
            <p className="text-lg text-primary-foreground/70 leading-relaxed">
              Bestel containersystemen, onderdelen en apparatuur. Neem contact op
              voor een offerte op maat of bekijk onze productcategorieën.
            </p>
          </div>
        </div>
      </section>

      <section className="py-20">
        <div className="container mx-auto px-4">
          <h2 className="font-heading text-3xl font-bold text-foreground mb-10 animate-on-scroll">
            Productcategorieën
          </h2>
          <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 stagger-children">
            {categories.map((cat) => (
              <div
                key={cat}
                className="animate-on-scroll flex items-center gap-4 p-6 rounded-xl border border-border bg-card hover-lift"
              >
                <div className="w-12 h-12 rounded-lg bg-accent/10 flex items-center justify-center shrink-0">
                  <Package size={24} className="text-accent" />
                </div>
                <h3 className="font-heading font-bold text-foreground">{cat}</h3>
              </div>
            ))}
          </div>

          <div className="mt-16 animate-on-scroll bg-secondary rounded-xl p-10 text-center">
            <h3 className="font-heading text-2xl font-bold text-foreground mb-4">
              Offerte aanvragen
            </h3>
            <p className="text-muted-foreground mb-8 max-w-lg mx-auto">
              Neem contact op voor een vrijblijvende offerte op maat. Wij adviseren u
              graag over de beste oplossing voor uw situatie.
            </p>
            <div className="flex flex-col sm:flex-row items-center justify-center gap-6 mb-6">
              <a href="mailto:info@b-advice.info" className="flex items-center gap-2 text-accent font-medium hover:text-green-dark transition-colors">
                <Mail size={18} /> info@b-advice.info
              </a>
              <a href="tel:+31643125245" className="flex items-center gap-2 text-accent font-medium hover:text-green-dark transition-colors">
                <Phone size={18} /> +31 (6) 431 25 245
              </a>
            </div>
            <a
              href="https://b-organized.info/login"
              target="_blank"
              rel="noopener noreferrer"
              className="inline-flex items-center gap-2 bg-green hover:bg-green-dark text-accent-foreground px-6 py-3 rounded-lg font-semibold transition-colors text-sm"
            >
              Bestellen via B-Organized <ArrowRight size={16} />
            </a>
          </div>
        </div>
      </section>
    </div>
  );
};

export default Bestellingen;
