const Cookiebeleid = () => {
  return (
    <div className="min-h-screen bg-background">
      <section className="py-20">
        <div className="container mx-auto px-4 max-w-3xl">
          <h1 className="font-heading text-4xl font-bold text-foreground mb-8">Cookiebeleid</h1>

          <div className="prose prose-lg max-w-none text-foreground/80 space-y-6">
            <p className="text-muted-foreground text-sm">Laatst bijgewerkt: {new Date().toLocaleDateString('nl-NL')}</p>

            <h2 className="font-heading text-2xl font-bold text-foreground mt-8">1. Wat zijn cookies?</h2>
            <p>Cookies zijn kleine tekstbestanden die op uw computer, tablet of smartphone worden geplaatst wanneer u onze website bezoekt. Ze helpen ons om de website goed te laten werken en om uw ervaring te verbeteren.</p>

            <h2 className="font-heading text-2xl font-bold text-foreground mt-8">2. Welke cookies gebruiken wij?</h2>

            <h3 className="font-heading text-xl font-semibold text-foreground mt-6">Functionele cookies</h3>
            <p>Deze cookies zijn noodzakelijk voor het functioneren van de website. Ze onthouden bijvoorbeeld uw cookievoorkeuren.</p>

            <h3 className="font-heading text-xl font-semibold text-foreground mt-6">Analytische cookies</h3>
            <p>Wij gebruiken analytische cookies om inzicht te krijgen in hoe bezoekers onze website gebruiken. Deze informatie helpt ons de website te verbeteren. De gegevens worden geanonimiseerd.</p>

            <h3 className="font-heading text-xl font-semibold text-foreground mt-6">Marketing cookies</h3>
            <p>Marketing cookies worden gebruikt om bezoekers te volgen over verschillende websites. Het doel is om advertenties weer te geven die relevant en aantrekkelijk zijn voor de individuele gebruiker.</p>

            <h2 className="font-heading text-2xl font-bold text-foreground mt-8">3. Cookies beheren</h2>
            <p>U kunt uw cookievoorkeuren op elk moment aanpassen via uw browserinstellingen. Daarnaast kunt u cookies verwijderen die al op uw apparaat zijn geplaatst.</p>
            <p>Houd er rekening mee dat het uitschakelen van cookies de functionaliteit van deze en andere websites kan beïnvloeden.</p>

            <h2 className="font-heading text-2xl font-bold text-foreground mt-8">4. Bewaartermijn</h2>
            <p>Cookies worden maximaal 12 maanden bewaard, tenzij anders aangegeven. Na deze periode worden ze automatisch verwijderd.</p>

            <h2 className="font-heading text-2xl font-bold text-foreground mt-8">5. Meer informatie</h2>
            <p>Voor meer informatie over hoe wij omgaan met uw gegevens, verwijzen wij u naar ons <a href="/privacybeleid" className="text-accent hover:underline">privacybeleid</a>.</p>

            <h2 className="font-heading text-2xl font-bold text-foreground mt-8">6. Contact</h2>
            <p>
              B-Advice<br />
              Achterdijk 26, Nieuwland (UT)<br />
              <a href="mailto:info@b-advice.info" className="text-accent hover:underline">info@b-advice.info</a><br />
              <a href="tel:+31643125245" className="text-accent hover:underline">+31 (6) 431 25 245</a>
            </p>
          </div>
        </div>
      </section>
    </div>
  );
};

export default Cookiebeleid;
