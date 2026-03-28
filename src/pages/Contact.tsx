import { useState, FormEvent } from "react";
import { Mail, Phone, MapPin, Send } from "lucide-react";
import { useScrollAnimation } from "@/hooks/use-scroll-animation";
import { toast } from "sonner";

const Contact = () => {
  const scrollRef = useScrollAnimation();
  const [form, setForm] = useState({ naam: "", email: "", telefoon: "", bericht: "" });

  const handleSubmit = (e: FormEvent) => {
    e.preventDefault();
    toast.success("Bedankt voor uw bericht! Wij nemen zo spoedig mogelijk contact met u op.");
    setForm({ naam: "", email: "", telefoon: "", bericht: "" });
  };

  return (
    <div ref={scrollRef}>
      <section className="bg-navy py-24 lg:py-32">
        <div className="container mx-auto px-4">
          <div className="max-w-3xl">
            <h1 className="font-heading text-4xl md:text-5xl font-bold text-primary-foreground mb-6">
              Contact
            </h1>
            <p className="text-lg text-primary-foreground/70 leading-relaxed">
              Heeft u een vraag of wilt u een vrijblijvend kennismakingsgesprek? Neem
              gerust contact met ons op.
            </p>
          </div>
        </div>
      </section>

      <section className="py-20">
        <div className="container mx-auto px-4">
          <div className="grid grid-cols-1 lg:grid-cols-2 gap-16">
            {/* Form */}
            <div className="animate-on-scroll">
              <h2 className="font-heading text-2xl font-bold text-foreground mb-8">
                Stuur ons een bericht
              </h2>
              <form onSubmit={handleSubmit} className="space-y-5">
                <div>
                  <label htmlFor="naam" className="block text-sm font-medium text-foreground mb-1.5">
                    Naam *
                  </label>
                  <input
                    id="naam"
                    type="text"
                    required
                    value={form.naam}
                    onChange={(e) => setForm({ ...form, naam: e.target.value })}
                    className="w-full px-4 py-3 rounded-lg border border-input bg-background text-foreground focus:outline-none focus:ring-2 focus:ring-ring transition-shadow"
                    placeholder="Uw naam"
                  />
                </div>
                <div>
                  <label htmlFor="email" className="block text-sm font-medium text-foreground mb-1.5">
                    E-mail *
                  </label>
                  <input
                    id="email"
                    type="email"
                    required
                    value={form.email}
                    onChange={(e) => setForm({ ...form, email: e.target.value })}
                    className="w-full px-4 py-3 rounded-lg border border-input bg-background text-foreground focus:outline-none focus:ring-2 focus:ring-ring transition-shadow"
                    placeholder="uw@email.nl"
                  />
                </div>
                <div>
                  <label htmlFor="telefoon" className="block text-sm font-medium text-foreground mb-1.5">
                    Telefoon
                  </label>
                  <input
                    id="telefoon"
                    type="tel"
                    value={form.telefoon}
                    onChange={(e) => setForm({ ...form, telefoon: e.target.value })}
                    className="w-full px-4 py-3 rounded-lg border border-input bg-background text-foreground focus:outline-none focus:ring-2 focus:ring-ring transition-shadow"
                    placeholder="+31 6 1234 5678"
                  />
                </div>
                <div>
                  <label htmlFor="bericht" className="block text-sm font-medium text-foreground mb-1.5">
                    Bericht *
                  </label>
                  <textarea
                    id="bericht"
                    required
                    rows={5}
                    value={form.bericht}
                    onChange={(e) => setForm({ ...form, bericht: e.target.value })}
                    className="w-full px-4 py-3 rounded-lg border border-input bg-background text-foreground focus:outline-none focus:ring-2 focus:ring-ring transition-shadow resize-none"
                    placeholder="Uw bericht..."
                  />
                </div>
                <button
                  type="submit"
                  className="inline-flex items-center gap-2 bg-accent hover:bg-green-dark text-accent-foreground px-8 py-3.5 rounded-lg font-semibold transition-colors"
                >
                  <Send size={18} /> Versturen
                </button>
              </form>
            </div>

            {/* Info */}
            <div className="animate-on-scroll">
              <h2 className="font-heading text-2xl font-bold text-foreground mb-8">
                Contactgegevens
              </h2>
              <div className="space-y-6 mb-10">
                <div className="flex items-start gap-4">
                  <div className="w-12 h-12 rounded-lg bg-accent/10 flex items-center justify-center shrink-0">
                    <Mail size={20} className="text-accent" />
                  </div>
                  <div>
                    <h3 className="font-semibold text-foreground">E-mail</h3>
                    <a href="mailto:info@b-advice.info" className="text-muted-foreground hover:text-accent transition-colors">
                      info@b-advice.info
                    </a>
                  </div>
                </div>
                <div className="flex items-start gap-4">
                  <div className="w-12 h-12 rounded-lg bg-accent/10 flex items-center justify-center shrink-0">
                    <Phone size={20} className="text-accent" />
                  </div>
                  <div>
                    <h3 className="font-semibold text-foreground">Telefoon</h3>
                    <a href="tel:+31643125245" className="text-muted-foreground hover:text-accent transition-colors">
                      +31 (6) 431 25 245
                    </a>
                  </div>
                </div>
                <div className="flex items-start gap-4">
                  <div className="w-12 h-12 rounded-lg bg-accent/10 flex items-center justify-center shrink-0">
                    <MapPin size={20} className="text-accent" />
                  </div>
                  <div>
                    <h3 className="font-semibold text-foreground">Adres</h3>
                    <p className="text-muted-foreground">
                      Achterdijk 26<br />
                      Nieuwland (UT), Nederland
                    </p>
                  </div>
                </div>
              </div>

              {/* Map */}
              <div className="rounded-xl overflow-hidden border border-border">
                <iframe
                  title="B-Advice locatie"
                  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2456.5!2d5.1!3d51.95!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNTHCsDU3JzAwLjAiTiA1wrAwNicwMC4wIkU!5e0!3m2!1snl!2snl!4v1"
                  width="100%"
                  height="300"
                  style={{ border: 0 }}
                  allowFullScreen
                  loading="lazy"
                  referrerPolicy="no-referrer-when-downgrade"
                />
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
  );
};

export default Contact;
