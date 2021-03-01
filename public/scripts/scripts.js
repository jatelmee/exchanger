//Select logic

$(() => {
  const $selects = $(".select")
  $selects.each((idx, container) => {
    const $parent = $(container)
    const $selectedOption = $parent.find(".selected .option")

    $selectedOption.on("click", () => {
      $parent.toggleClass("isOpen")
    })

    $options = $parent.find(".list .option")
    
    $options.on("click", (event) => {
      const $option = $(event.target)
      $selectedOption.html($option.html())
      $parent.toggleClass("isOpen")
    })
  })
})
