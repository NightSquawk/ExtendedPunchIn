use Symfony\Component\HttpFoundation\File\UploadedFile;

// Inside clock-in handling action
$form->handleRequest($request);
if ($form->isSubmitted() && $form->isValid()) {
$timesheet = $form->getData();

/** @var UploadedFile $photo */
$photo = $form->get('photo')->getData();
if ($photo) {
$fileName = uniqid().'.'.$photo->guessExtension();
$photo->move(
$this->getParameter('photos_directory'), // Directory from services.yaml
$fileName
);
$timesheet->setPhotoPath($fileName);
}

// Save the timesheet entity with photo path
$entityManager->persist($timesheet);
$entityManager->flush();
}
