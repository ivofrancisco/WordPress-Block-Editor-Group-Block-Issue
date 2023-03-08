<div class="one-third">
            <h2 class="search-overlay__section-title">General Information</h2>
            ${
                results.generalInfo.length
                    ? '<ul class="link-list min-list">'
                    : "<p>No general information matches that search.</p>"
            }
              ${results.generalInfo
                  .map(
                      (item) =>
                          `<li><a href="${item.permalink}">${item.title}</a> ${
                              item.postType == "post"
                                  ? `by ${item.authorName}`
                                  : ""
                          }</li>`
                  )
                  .join("")}
            ${results.generalInfo.length ? "</ul>" : ""}
          </div>
          <div class="one-third">
            <h2 class="search-overlay__section-title">Programs</h2>
            ${
                results.programs.length
                    ? '<ul class="link-list min-list">'
                    : `<p>No programs match that search. <a href="${fxtData.root_url}/programs">View all programs</a></p>`
            }
              ${results.programs
                  .map(
                      (item) =>
                          `<li><a href="${item.permalink}">${item.title}</a></li>`
                  )
                  .join("")}
            ${results.programs.length ? "</ul>" : ""}

            <h2 class="search-overlay__section-title">Professors</h2>
            ${
                results.professors.length
                    ? '<ul class="professor-cards">'
                    : `<p>No professors match that search.</p>`
            }
              ${results.professors
                  .map(
                      (item) => `
                <li class="professor-card__list-item">
                  <a class="professor-card" href="${item.permalink}">
                    <img class="professor-card__image" src="${item.image}">
                    <span class="professor-card__name">${item.title}</span>
                  </a>
                </li>
              `
                  )
                  .join("")}
            ${results.professors.length ? "</ul>" : ""}

          </div>