   import { documentToHtmlString } from "https://esm.sh/@contentful/rich-text-html-renderer";

    const SPACE = "d9ba8feu73io";
    const TOKEN = "i9ibOU0-6LvdaSJ4n2lx_0TqoSOgaAgrRF_3-fMIac8";
    const url = `https://cdn.contentful.com/spaces/${SPACE}/environments/master/entries` +
      `?content_type=campaignLandingPage&include=2&access_token=${TOKEN}`;

    const data = await fetch(url).then(r => r.json());

    const assets = {};
    (data.includes?.Asset || []).forEach(a => (assets[a.sys.id] = a));
    const linked = {};
    (data.includes?.Entry || []).forEach(e => (linked[e.sys.id] = e));

    const f = data.items[0].fields;
    const heroId = f.heroImage?.sys?.id;
    const heroUrl = heroId && assets[heroId] ? "https:" + assets[heroId].fields.file.url : "";

    const modules = (f.relatedModules || []).map(link => {
      const m = linked[link.sys.id];
      return m ? `<div class="module"><h3>${m.fields.title}</h3><p>${m.fields.description || ""}</p>
        <a href="${m.fields.link || "#"}">Learn more</a></div>` : "";
    }).join("");

    document.getElementById("app").innerHTML = `
      <h1>${f.title || ""}</h1>
      ${heroUrl ? `<img src="${heroUrl}" alt="" />` : ""}
      <div>${f.body ? documentToHtmlString(f.body) : ""}</div>
      ${f.ctaLabel ? `<a class="cta" href="${f.ctaUrl || "#"}">${f.ctaLabel}</a>` : ""}
      <div class="modules">${modules}</div>
    `;