import { ArrowRight, LayoutDashboard, ClipboardList, BarChart3, Package } from "lucide-react";
import { useScrollAnimation } from "@/hooks/use-scroll-animation";
import dashboardImg from "@/assets/b-organized-dashboard.jpg";

const features = [
  {
    icon: LayoutDashboard,
    title: "Real-time overzicht",
    description: "Compleet inzicht in al uw inzamelmiddelen op één centraal dashboard.",
  },
  {
    icon: Package,
    title: "Assetregistratie",
    description: "Volledige registratie en tracking van containers, ondergrondse systemen en meer.",
  },
  {
    icon: ClipboardList,
    title: "Ordermanagement",
    description: "Beheer bestellingen, plaatsingen en onderhoud vanuit één platform.",
  },
  {
    icon: BarChart3,
    title: "Rapportages",
    description: "Uitgebreide rapportages en analyses voor onderbouwde besluitvorming.",
  },
];

const BOrganized = () => {
  const scrollRef = useScrollAnimation();

  return (
    <div ref={scrollRef}>
      {/* Hero */}
      <section className="bg-navy py-24 lg:py-32">
        <div className="container mx-auto px-4">
          <div className="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div>
              <span className="inline-block bg-accent/20 text-accent text-sm font-semibold px-4 py-1.5 rounded-full mb-6">
                Ons platform
              </span>
              <h1 className="font-heading text-4xl md:text-5xl font-bold text-primary-foreground mb-6 leading-tight">
                B-Organized
              </h1>
              <p className="text-lg text-primary-foreground/70 leading-relaxed mb-8">
                Het SMART beheerplatform voor afvalinzamelmiddelen. Krijg real-time
                overzicht, beheer uw assets en optimaliseer uw containerpark — alles
                vanuit één overzichtelijk dashboard.
              </p>
              <a
                href="https://b-organized.info/login"
                target="_blank"
                rel="noopener noreferrer"
                className="inline-flex items-center gap-2 bg-green hover:bg-green-dark text-accent-foreground px-8 py-4 rounded-lg font-semibold transition-colors text-lg"
              >
                Login op B-Organized <ArrowRight size={20} />
              </a>
            </div>
            <div className="animate-on-scroll">
              <img
                src={dashboardImg}
                alt="B-Organized dashboard"
                className="rounded-xl shadow-2xl border border-primary-foreground/10"
                loading="lazy"
                width={1280}
                height={800}
              />
            </div>
          </div>
        </div>
      </section>

      {/* Features */}
      <section className="py-20">
        <div className="container mx-auto px-4">
          <h2 className="font-heading text-3xl font-bold text-foreground mb-12 text-center animate-on-scroll">
            Wat biedt B-Organized?
          </h2>
          <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 stagger-children">
            {features.map((f) => (
              <div
                key={f.title}
                className="animate-on-scroll text-center p-8 rounded-xl border border-border hover-lift bg-card"
              >
                <div className="w-14 h-14 rounded-xl bg-accent/10 flex items-center justify-center mx-auto mb-5">
                  <f.icon size={28} className="text-accent" />
                </div>
                <h3 className="font-heading text-lg font-bold text-foreground mb-2">{f.title}</h3>
                <p className="text-muted-foreground text-sm leading-relaxed">{f.description}</p>
              </div>
            ))}
          </div>
        </div>
      </section>

      {/* Bottom CTA */}
      <section className="py-20 bg-accent">
        <div className="container mx-auto px-4 text-center">
          <h2 className="font-heading text-3xl md:text-4xl font-bold text-accent-foreground mb-4">
            Klaar om te starten?
          </h2>
          <p className="text-accent-foreground/80 text-lg mb-8 max-w-xl mx-auto">
            Log direct in op B-Organized en krijg grip op uw containerpark.
          </p>
          <a
            href="https://b-organized.info/login"
            target="_blank"
            rel="noopener noreferrer"
            className="inline-flex items-center gap-2 bg-navy hover:bg-navy-light text-primary-foreground px-8 py-4 rounded-lg font-semibold transition-colors"
          >
            Login B-Organized <ArrowRight size={18} />
          </a>
        </div>
      </section>
    </div>
  );
};

export default BOrganized;
